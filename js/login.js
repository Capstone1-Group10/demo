const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});

const show_pw_btn = document.querySelector('#show-passwd')
const show_pw_icon = show_pw_btn.querySelector('img')
const pw_input = document.querySelector('#password')

show_pw_btn.addEventListener('click', () => {
	pw_input.type = pw_input.type === 'password' 
		? 'text' 
		: 'password'

	show_pw_icon.src = show_pw_icon.src.includes('open') 
		? 'eye-slash-solid.svg' 
		: 'eye-solid.svg'
})
