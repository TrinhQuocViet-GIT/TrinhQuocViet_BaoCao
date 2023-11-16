<div class="py-2" style="font-size: 12px">Hỗ trợ khách hàng 24/7<br>
    @foreach ($contacts as $contact)
        Liên hệ:
        {{ $contact->phone }}
        <br>
        Email:{{ $contact->email }}
    @endforeach
</div>
