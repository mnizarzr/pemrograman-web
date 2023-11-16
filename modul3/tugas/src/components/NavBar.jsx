import { Link } from "react-router-dom";

export default function NavBar() {
  return (
    <>
      <nav className="navbar navbar-expand-lg">
        <div className="container-fluid">
          <a href="#" className="navbar-brand col">
            <img
              src="./logo-ilab.png"
              alt="Logo Ilab"
              height="30"
            />
          </a>
          <div className="col">
            <ul className="navbar-nav me-auto mb-2 mb-lg-0 col justify-content-center">
              <li className="nav-item">
                <Link className="nav-link" to={"/"}>
                  <strong>HOME</strong>
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to={"/about"}>
                  <strong>ABOUT US</strong>
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to={"/contact"}>
                  <strong>CONTACT</strong>
                </Link>
              </li>
            </ul>
          </div>
          <div className="col d-grid gap-2 d-flex justify-content-end">
            <button
              type="button"
              style={{ width: "100px" }}
              className="btn btn-outline-secondary rounded-4"
            >
              SIGN UP
            </button>
            <button
              type="button"
              style={{ width: "100px", backgroundColor: "#6b86ed" }}
              className="btn btn-primary rounded-4"
            >
              LOG IN
            </button>
          </div>
        </div>
      </nav>
    </>
  );
}
