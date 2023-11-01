<div class="shadow-lg w-100 position-relative p-5 border border-5 container-card"
    style="border-color: {{ $bordercolor }} !important">
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="d-flex align-items-center flex-column" style="color: #585b63">
        @if ($toutlip)
            <div class="toutlip-card">
                <div>
                    <p class="text-uppercase fw-900 text-white px-5 py-1" style="background: #d20a0a">most popular</p>
                </div>
            </div>
        @endif
        <p class="fs-5 text-uppercase fw-600 mb-0" style="letter-spacing: 3px">{{ $typesubscribe }}</p>
        <p class="text-uppercase fw-900 mb-0" style="font-size: 3.8rem">{{ $value }}</p>
        <p class="text-uppercase fw-900" style="color: #a4a7ac">BRL</p>
        <br>
        <br>
        <br>
        <div>
            <p class="fw-500">Access to UFC events, the entire UFC Fight Library, live martial arts events from around
                the world and
                exclusive original series and shows</p>
            <br>
            <ul>
                <li>
                    <p class="fw-500 mb-1">Over 1,000 hours of live combat sports action from around the globe</p>
                </li>
                <li>
                    <p class="fw-500 mb-1">Over 1,000 hours of live combat sports action from around the globe</p>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <button type="button"
            class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-3 fw-900 fs-4 shadow-sm" style="width: 70%">select</button>
        {{ $slot }}
    </div>
</div>
