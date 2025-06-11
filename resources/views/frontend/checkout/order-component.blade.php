<style>
    .order-details {
        background: #fff;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
        max-width: 420px;
        margin: auto;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .order-details h3 {
        font-weight: 700;
        font-size: 1.5rem;
        border-bottom: 2px solid #007bff;
        padding-bottom: 0.5rem;
        margin-bottom: 1.5rem;
    }

    .order-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .order-row p {
        margin: 0;
    }

    .order-row p span {
        font-weight: 600;
        color: #555;
        margin-left: 0.4rem;
    }

    .coupon,
    .delivery-charge {
        font-weight: 600;
        color: #007bff;
        margin-bottom: 1rem;
    }

    .total {
        display: flex;
        justify-content: space-between;
        padding: 1rem 0;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        font-weight: 700;
        font-size: 1.25rem;
    }

    .tax-note {
        font-size: 0.85rem;
        color: #666;
    }

    .payment-methods {
        margin-top: 1.5rem;
    }

    .payment-methods label {
        font-weight: 600;
        font-size: 1rem;
    }

    .form-check {
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
    }

    .form-check img {
        margin-left: 1rem;
    }

    .terms {
        font-size: 0.9rem;
        margin-top: 1rem;
    }

    .terms a {
        color: #dc3545;
        text-decoration: underline;
    }

    .btn-place-order {
        width: 100%;
        padding: 0.75rem;
        font-size: 1.1rem;
        font-weight: 700;
        background-color: #007bff;
        border: none;
        border-radius: 0.5rem;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-place-order:hover {
        background-color: #0056b3;
    }
</style>

<div class="order-details">
    <h3>Order Details</h3>

    <div class="order-row" style="font-weight:700; border-bottom: 1px solid #ddd; padding-bottom:0.5rem;">
        <p>Product</p>
        <p>Subtotal</p>
    </div>

    @if ($cartItems->isNotEmpty())
        @foreach ($cartItems as $item)
            <div class="order-row">
                <p>
                    {{ $item->name ?? '' }}
                    <span>x {{ $item->quantity ?? '' }}</span>
                </p>
                @if ($item->price)
                    <p>Rs. {{ number_format($item->price * $item->quantity) }}</p>
                @endif
            </div>
        @endforeach

        @if (session()->has('couponDiscount'))
            <div class="coupon order-row">
                <p>Coupon Discount</p>
                <p>{{ discount() }}</p>
            </div>
        @endif

        @if ($deliveryCharge > 0)
            <div class="delivery-charge order-row">
                <p>Delivery Charge</p>
                <p>Rs. {{ $deliveryCharge ?? 0 }}</p>
            </div>
        @endif

        <div class="total">
            <p>Total</p>
            <div style="text-align: right;">
                <p>Rs. {{ number_format(getTotalAmount() + $deliveryCharge, 2) }}</p>
                <p class="tax-note">Tax inclusive *</p>
            </div>
        </div>
    @endif

    <div class="payment-methods">
        <div class="form-check">
            <input class="form-check-input" id="cod" value="Cash on delivery" type="radio" name="payment_method"
                checked />
            <label for="cod" style="margin-left: 0.5rem;">Cash on Delivery</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" id="esewa" value="eSewa" type="radio" name="payment_method" />
            <label for="esewa" style="margin-left: 0.5rem;">eSewa</label>
            <img src="{{ asset('frontend/assets/icon/esewa.png') }}" height="24" width="60" alt="eSewa" />
        </div>

        <div class="form-check terms">
            <input class="form-check-input" id="terms" type="checkbox" required />
            <label for="terms" style="margin-left: 0.5rem;">
                I have read and agreed to the website
                <a href="{{ route('page.show', 'terms-and-conditions') }}" target="_blank">terms and conditions</a>
            </label>
        </div>

        <button class="btn-place-order" type="submit">Place Order</button>
    </div>
</div>
