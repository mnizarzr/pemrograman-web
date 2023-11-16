import { Image } from "react-bootstrap";

export default function Hero() {
  return (
    <>
      <main className="position-relative">
        <Image fluid src="./hero.jpg" alt="Gambar Laptop" />
        <div
          className="text-white position-absolute top-50"
          style={{
            transform: `translateX(100px)`,
          }}
        >
          <h1 style={{ fontSize: "48pt" }}>Selamat Datang</h1>
          <h4 style={{ fontSize: "28pt" }} className="fw-normal">
            di website Praktikum Pemrograman Website
          </h4>
        </div>
      </main>
    </>
  );
}
