import NavBar from "../components/NavBar";
import Footer from "../components/Footer";

export default function About() {
  return (
    <>
      <NavBar />
      <div className="container">
        <h1>Tentang kami</h1>
        <p>
          i-Lab merupakan sistem terintegrasi yang dapat menunjang kegiatan
          praktikum jurusan Informatika Universitas Muhammadiyah Malang, baik
          untuk praktikan, dosen maupun asisten. i-Lab merupakan karya mahasiswa
          Universitas Muhammadiyah Malang dan sudah ada sejak tahun 2012 dan
          sudah banyak melalui perubahan sejak saat itu
        </p>
        <ul style={{ listStyleType: "lower-alpha" }}>
          <li>
            <h6>Laboratorium Rekayasa Perangkat Lunak</h6>
            <p>
              Melakukan analisa kelayakan pembuatan, penerapan proyek perangkat
              lunak, analisa kebutuhan, perancangan, pembuatan dan penjaminan
              kualitas perangkat lunak serta melakukan rekayasa ulang perangkat
              lunak.
            </p>
          </li>
          <li>
            <h6>Laboratorium Sistem dan Keamanan Jaringan</h6>
            <p>
              Menganalisis permasalahan, memberikan solusi berupa perekayasaan,
              pembuatan dan pengelolaan, serta melakukan evaluasi pada sistem
              jaringan.
            </p>
          </li>
          <li>
            <h6>Laboratorium Game Cerdas</h6>
            <p>
              Bekerja dengan tim mengembangkan dan merancang video game.
              Mengkoordinasikan tugas kompleks menciptakan video game baru yang
              memiliki tugas seperti merancang karakter, level, teka-teki, art
              dan animasi. Software Engineer, Programmer, atau Computer
              Scientist yang terutama mengembangkan basis kode untuk video game
              atau perangkat lunak terkait, seperti alat-alat pengembangan game.
            </p>
          </li>
          <li>
            <h6>Laboratorium Sains Data</h6>
            <p>
              Menganalisis dan mengolah data menjadi suatu informasi dan
              pengetahuan.
            </p>
          </li>
        </ul>
      </div>
      <Footer />
    </>
  );
}
