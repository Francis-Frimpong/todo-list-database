const form = document.querySelector(".update-form");
const inputTxt = document.querySelector(".input-txt");
const addBtn = document.querySelector(".add-btn");
const editBtn = document.querySelectorAll(".edit-btn");
const deleteBtn = document.querySelectorAll(".delete-btn");
addBtn.addEventListener("click", (e) => {
  e.preventDefault();
  inputTxt.value = "";
});

editBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();
  });
});
deleteBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();
  });
});
