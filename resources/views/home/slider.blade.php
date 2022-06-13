<br>
<div class="slideshow-container">

@foreach($sliderdata as $rs)

<div class="mySlides fade">
  
  <img src="{{Storage::url($rs->image)}}" style="width:1000px; height:450px;">
  <!--<div class="text">Caption Text</div>-->
</div>

@endforeach


</div>
<br>

<div style="text-align:center">
  @foreach($sliderdata as $rs)
  <span class="dot"></span>
  @endforeach
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
