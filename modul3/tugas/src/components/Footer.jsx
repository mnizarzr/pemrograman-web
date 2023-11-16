export default function Footer() {
  return (
    <>
      <footer className="w-100 d-flex justify-content-between p-5">
        <section className="d-flex flex-grow-1 text-center flex-column align-items-center">
          <img
            className="p-4"
            src="./logo-ilab.png"
            alt="Logo Ilab"
            width="200"
          />
          <p>Copyright &copy; 2023 Infotech</p>
        </section>
        <section className="col">
          <h6 className="mb-3 text-secondary fw-bold">Services</h6>
          <ul className="m-0 p-0">
            <li className="nav-link mb-2">Email Marketing</li>
            <li className="nav-link mb-2">Campaigns</li>
            <li className="nav-link mb-2">Branding</li>
            <li className="nav-link">Offline</li>
          </ul>
        </section>
        <section className="col">
          <h6 className="mb-3 text-secondary fw-bold">About</h6>
          <ul className="m-0 p-0">
            <li className="nav-link mb-2">Our Story</li>
            <li className="nav-link mb-2">Benefits</li>
            <li className="nav-link mb-2">Team</li>
            <li className="nav-link">Careers</li>
          </ul>
        </section>
        <section className="col mx-auto">
          <h6 className="mb-3 text-secondary fw-bold">Follow Us</h6>
          <a href="https://www.facebook.com/">
            <p className="d-flex flex-row">
              <i className="bi bi-facebook me-2"></i>
              Facebook
            </p>
          </a>
          <a href="https://x.com">
            <p className="d-flex flex-row">
              <i className="bi bi-twitter-x me-2"></i>X (formerly Twitter)
            </p>
          </a>
          <a href="https://www.instagram.com/">
            <p className="d-flex flex-row">
              <i className="bi bi-instagram me-2"></i>
              Instagram
            </p>
          </a>
        </section>
      </footer>
    </>
  );
}
