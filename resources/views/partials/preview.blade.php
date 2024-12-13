@if($imagePath)
    <div style="margin-bottom: 15px;">
        <p>{{__("Image")}}:</p>
        <img src="{{  $imagePath }}" alt="Current Image" style="max-width: 400px;">
    </div>
@endif
@if($video)
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>


    <p>{{__("Video")}}:</p>

        <video id="player" class="tm-videobg"  width="100%"  playsinline controls>
            <source src="{{$video}}" type="video/mp4">
        </video>
    <script>
        const player = new Plyr('#player', {
            autoplay: true // فعال‌سازی autoplay
        });
    </script>
    @endif
