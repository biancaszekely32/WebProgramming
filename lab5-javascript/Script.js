// JavaScript source code

function show(className) {
	const elements = document.querySelectorAll('.' + className);
	elements.forEach((element) => {
		element.style.visibility = 'visible';
	});
}

function hide(className) {
	const elements = document.querySelectorAll('.' + className);
	elements.forEach((element) => {
		element.style.visibility = 'hidden';
	});
}