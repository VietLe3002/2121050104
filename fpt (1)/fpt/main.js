let banner = document.getElementById("banner1");
let bannerImage = document.querySelector("#banner1 img");
let trailerContainer = document.getElementById("trailer1");
let trailerButton = document.querySelector(".btn-trailer");
const doiVideo = () => {
  // Thêm hiệu ứng pulse khi click
  trailerButton.classList.add("pulse");

  setTimeout(() => {
    banner.style.display = "none";
    trailerContainer.style.display = "flex";
    trailerButton.classList.remove("pulse");

    // Đổi text button thành "Đang phát trailer"
    trailerButton.textContent = "Đang phát trailer";
    trailerButton.style.background =
      "linear-gradient(135deg, #00cc66, #00ff88)";
    trailerButton.disabled = true;
  }, 300);
};

const closeTrailer = () => {
  trailerContainer.style.display = "none";
  banner.style.display = "flex";

  // Reset button về trạng thái ban đầu
  trailerButton.innerHTML = "Xem trailer";
  trailerButton.style.background =
    "linear-gradient(135deg, #ff6b00, #ff8c00, #ff6b00)";
  trailerButton.disabled = false;

  // Dừng video trailer
  let iframe = document.getElementById("trailer2");
  iframe.src = iframe.src; // Reload để dừng video
};

let listFilm = [
  {
    id: 1,
    name: "Conan",
    banner: "./img/Banner_conan.jpg",
    poster: "./img/Poster_Phim_Thám_Tử_Lừng_Danh_Conan_Movie_28.jpg", // Ảnh poster 350x495
    trailer: "https://www.youtube.com/embed/D22Ezh_UiVM?si=KCE51tPdlSDa7MJf",
    nation: "Nhật Bản",
  },
  {
    id: 2,
    name: "Pacific Rim",
    banner: "./img/pacific-rim.jpg",
    poster: "./img/pacific_rim.jpg", // Ảnh poster 350x495
    trailer: "https://www.youtube.com/embed/5guMumPFBag?si=_7Dbc4iQUkubAzKY",
    nation: "Mỹ",
  },
  {
    id: 3,
    name: "Mưa đỏ",
    banner: "./640x396-muado.jpg",
    poster: "./350x495-muado.jpg",
    trailer: "https://www.youtube.com/embed/BD6PoZJdt_M?si=KbB_4fi2YbA2kLzP",
    nation: "Việt Nam",
  },
];

// Hàm chọn phim và cập nhật banner
const chooseFilm = (filmID) => {
  let selectedFilm = listFilm.find((film) => film.id == filmID);

  if (selectedFilm) {
    // Cập nhật banner
    bannerImage.src = selectedFilm.banner;

    // Cập nhật trailer
    let iframe = document.getElementById("trailer2");
    iframe.src = selectedFilm.trailer;

    // Hiển thị thông tin quốc gia (nếu muốn)
    console.log("Phim:", selectedFilm.name, "- Quốc gia:", selectedFilm.nation);
  }
};

// Hàm để tạo danh sách phim động
const renderFilmList = () => {
  const filmContainers = document.querySelectorAll(".danhsach");

  filmContainers.forEach((container) => {
    // Xóa nội dung cũ
    container.innerHTML = "";

    // Thêm phim mới từ listFilm
    listFilm.forEach((film) => {
      const filmElement = document.createElement("div");
      filmElement.className = "phim";
      filmElement.onclick = () => chooseFilm(film.id);
      filmElement.style.cursor = "pointer";

      filmElement.innerHTML = `
                <div class="anh">
                    <img src="${film.poster}" alt="${film.name}">
                </div>
                <div class="ten">
                    ${film.name}
                </div>
            `;

      container.appendChild(filmElement);
    });
  });
};

// Gọi hàm render khi trang load
document.addEventListener("DOMContentLoaded", renderFilmList);
