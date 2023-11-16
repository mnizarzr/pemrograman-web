import { Image, Col, Nav, NavLink } from "react-bootstrap";

export default function Footer() {
  return (
    <>
      <footer className="w-100 d-flex justify-content-between p-5">
        <section className="d-flex flex-grow-1 text-center flex-column align-items-center">
          <Image src="./logo-ilab.png" alt="Logo Ilab" width={200} />
          <p>Copyright &copy; 2023 Infotech</p>
        </section>
        <Col>
          <h6 className="mb-3 text-secondary fw-bold">Services</h6>
          <Nav className="m-0 p-0">
            <Nav.Link>Email Marketing</Nav.Link>
            <Nav.Link>Campaigns</Nav.Link>
            <Nav.Link>Branding</Nav.Link>
            <Nav.Link>Offline</Nav.Link>
          </Nav>
        </Col>
        <Col>
          <h6 className="mb-3 text-secondary fw-bold">Services</h6>
          <Nav className="m-0 p-0">
            <Nav.Link>Our Story</Nav.Link>
            <Nav.Link>Benefits</Nav.Link>
            <Nav.Link>Team</Nav.Link>
            <Nav.Link>Careers</Nav.Link>
          </Nav>
        </Col>
        <Col className="mx-auto">
          <h6 className="mb-3 text-secondary fw-bold">Follow Us</h6>
          <NavLink href="https://www.facebook.com/">
            <p className="d-flex flex-row">
              <i className="bi bi-facebook me-2"></i>
              Facebook
            </p>
          </NavLink>
          <NavLink href="https://x.com">
            <p className="d-flex flex-row">
              <i className="bi bi-twitter-x me-2"></i>X (formerly Twitter)
            </p>
          </NavLink>
          <NavLink href="https://www.instagram.com/">
            <p className="d-flex flex-row">
              <i className="bi bi-instagram me-2"></i>
              Instagram
            </p>
          </NavLink>
        </Col>
      </footer>
    </>
  );
}
