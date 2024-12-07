<section class="mx-auto ">

    <div class="container flex flex-col mx-auto px-4 mb-4">

        <livewire:header type="Hero" title="{{ env('APP_NAME') }}" subtitle="{{ env('APP_MOTTO') }}"/>

        @if(Auth::check())



        <x-card title="Kayıt Türleri" squared>

            <ol class="m-4">
                <li>Apartman Aidat</li>
                <li>Ev Elektrik</li>
                <li>Ev Su</li>
                <li>Ev Doğalgaz</li>
                <li>Ev Internet (TURKSAT)</li>
                <li>KAT Telefon</li>
                <li>KAT 06 AY 4095 - Benzin</li>
                <li>KAT 06 AY 4095 - Tamir/Bakım vs ...</li>
                <li>KAT Yemek Masrafları</li>
                <li>Sağlık</li>
                <li>Şirkete ait yeni eşya alımı: Araba - Bilgisayar - Telefon vs ..</li>
                <li>Bağış</li>
            </ol>

        </x-card>


        @else
            <img class="object-cover" src="{{ asset('/images/Hero.jpg') }}">

        @endif

    </div>

</section>
