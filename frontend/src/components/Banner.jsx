import Background from "../photos/main-photo.jpg";

function Banner() {
  return (
    <div className="relative w-full h-screen">
      <img
        src={Background}
        alt="Main Background"
        className="w-full h-full object-cover"
      />
    </div>
  );
}

export default Banner;
