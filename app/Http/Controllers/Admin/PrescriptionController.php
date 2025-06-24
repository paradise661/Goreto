<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Prescription;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    /**
     * Customer uploads prescription (via API).
     */
    public function uploadPrescription(Request $request)
    {
        try {
            if (!Auth::guard('customer')->check()) {
                return response()->json(['success' => false, 'message' => 'Not authenticated'], 401);
            }

            \Log::info('🟢 Customer is authenticated.');

            $request->validate([
                'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'doctor_name' => 'nullable|string|max:255',
                'doctor_title' => 'nullable|string|max:255',
                'message' => 'nullable|string|max:1000',
            ]);

            \Log::info('🟢 Validation passed.');

            $filePath = $request->file('file')->store('prescriptions', 'public');

            \Log::info('🟢 File stored at: ' . $filePath);

            Prescription::create([
                'customer_id' => Auth::guard('customer')->id(),
                'file_path' => $filePath,
                'doctor_name' => $request->doctor_name,
                'doctor_title' => $request->doctor_title,
                'message' => $request->message,
            ]);

            \Log::info('✅ Prescription saved.');

            return response()->json(['success' => true, 'message' => 'Prescription uploaded successfully.']);

        } catch (\Exception $e) {
            \Log::error('❌ Upload Exception: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Upload failed: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Admin: View all uploaded prescriptions.
     */
    public function index()
    {
        $prescriptions = Prescription::with('customer')->latest()->paginate(15);
        return view('admin.prescriptions.index', compact('prescriptions'));
    }


    public function destroy(Prescription $prescription)
{
    // Optional: delete file from storage
    if ($prescription->file_path && \Storage::disk('public')->exists($prescription->file_path)) {
        \Storage::disk('public')->delete($prescription->file_path);
    }

    $prescription->delete();

    return redirect()->route('admin.prescriptions.index')->with('message', 'Prescription deleted successfully.');
}
    public function show($id)
{
    $prescription = Prescription::with('customer')->findOrFail($id);
    return view('admin.prescriptions.show', compact('prescription'));
}

}
