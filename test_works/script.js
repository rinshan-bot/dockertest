function displayImage(imageName) {
  const imageContainer = document.getElementById("imageContainer");
  imageContainer.innerHTML = `<img src="${imageName}" alt="Service Image" class="img-fluid">`;
}

