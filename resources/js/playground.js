document.addEventListener("DOMContentLoaded", () => {

	// When clicking Card Row cards
	document.querySelectorAll(".card-row .card").forEach((el) =>
	{
		el.addEventListener('click', (e) =>
		{
			// Set clicked card to active
			const $active_card = document.querySelector('.card-row .card.active')
			if($active_card)
				$active_card.classList.remove("active");
			e.target.classList.add("active");

			// Set corresponding info-box to active
			const id = e.target.id;
			document.querySelectorAll('.info-box').forEach((el) => {
				if(el.id === id)
					el.classList.add("active")
				else
					el.classList.remove("active");
			});
		});
	});
});