<script type="text/javascript" defer>
[...document.getElementsByClassName("faqaccordion")].forEach(e => {
	e.addEventListener("click", () => {
		e.classList.toggle("active");
    	let a_el = e.nextElementSibling;
    	a_el.style.maxHeight = a_el.style.maxHeight ? null : (a_el.scrollHeight + "px");
	});
});
</script>