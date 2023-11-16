import { Container, Col, Nav, Navbar, Button } from "react-bootstrap";
import { Link } from "react-router-dom";

export default function NavBar() {
  return (
    <>
      <Navbar sticky="top">
        <Container>
          <Col>
            <Navbar.Brand as={Link} to={"/"}>
              <img src="./logo-ilab.png" alt="Ilab Logo" />
            </Navbar.Brand>
          </Col>
          <Col>
            <Navbar.Toggle aria-controls="basic-navbar-nav" />
            <Navbar.Collapse id="basic-navbar-nav">
              <Nav className="me-auto">
                <Nav.Link as={Link} to={"/"}>HOME</Nav.Link>
                <Nav.Link as={Link} to={"/about"}>ABOUT US</Nav.Link>
                <Nav.Link as={Link} to={"/contact"}>CONTACT</Nav.Link>
              </Nav>
            </Navbar.Collapse>
          </Col>
          <Col>
            <Button className="rounded-4" variant="outline-secondary">
              SIGN UP
            </Button>
            <Button
              className="rounded-4"
              style={{ backgroundColor: "#6b86ed" }}
              variant="primary"
            ></Button>
            LOG IN
          </Col>
        </Container>
      </Navbar>
    </>
  );
}
