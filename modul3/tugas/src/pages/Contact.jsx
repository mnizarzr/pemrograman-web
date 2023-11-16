import NavBar from "../components/NavBar";
import Footer from "../components/Footer";

export default function Contact() {
  return (
    <>
      <NavBar />
      <form className="container my-5 px-5">
        <p className="mb-1 fw-bold text-center text-gray-900">
          Kontak kami
        </p>
        <div className="mb-4">
          <label
            htmlFor="text"
            className="block mb-2 text-sm font-medium text-gray-900"
          >
            Nama
          </label>
          <input
            type="text"
            id="username"
            className="form-control"
            placeholder="Nama anda"
            required
          />
        </div>
        <div className="mb-4">
          <label
            htmlFor="email"
            className="block mb-2 text-sm font-medium text-gray-900"
          >
            Email
          </label>
          <input
            type="email"
            id="email"
            className="form-control"
            placeholder="name@gmail.com"
            required
          />
        </div>
        <div className="mb-4">
          <label
            htmlFor="message"
            className="block mb-2 text-sm font-medium text-gray-900"
          >
            Apa pesan yang ingin anda sampaikan?
          </label>
          <textarea
            id="message"
            rows="4"
            className="form-control"
            placeholder="Leave a comment..."
          ></textarea>
        </div>
        <div className="form-check mb-4">
          <input
            id="terms"
            type="checkbox"
            className="form-check-input"
            required
          />
          <label
            htmlFor="terms"
            className="form-check-label text-sm font-medium text-gray-900"
          >
            I agree with the{" "}
            <a href="/" className="text-login">
              terms and conditions
            </a>
          </label>
        </div>
        <button type="submit" className="btn btn-primary btn-block">
          Send Message
        </button>
      </form>

      <Footer />
    </>
  );
}
