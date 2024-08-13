@extends('home.layouts.master')
@section('title', 'Visi Misi | DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG')
@section('content')
    <section id="vm" class="vm section">
        <div class="vm-bg">
            <img src="{{ URL::to('/') }}/assets/img/banner-vm.png" alt="">
        </div>
    </section>

    <section>
      <p>{!! $result->renderTrix("content") !!}</p>

        {{-- <div class="vision-structure" style="padding-top :60px">
          @forelse ($table as $index => $row)
          <p>{!! $row->content !!}</p> <!-- Menampilkan konten Trix -->
      
      @empty
          <p>Tidak ada data</p>
      @endforelse --}}
        </div>
        </div>
    </section>
@endsection


