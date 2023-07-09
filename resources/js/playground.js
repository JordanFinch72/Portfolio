document.addEventListener("DOMContentLoaded", () =>
{
	function toggleActive($oldEl, $newEl)
	{
		// Set clicked card to active
		$oldEl.classList.remove("active");
		$newEl.classList.add("active");

		// Set corresponding info-box to active
		const id = $newEl.id;
		document.querySelectorAll('.info-box').forEach((el) => {
			if(el.id === id)
				el.classList.add("active")
			else
				el.classList.remove("active");
		});
	}

	// When clicking Card Row cards
	document.querySelectorAll(".card-row .card").forEach((el) =>
	{
		el.addEventListener('click', (e) =>
		{
			const $activeCard = document.querySelector('.card-row .card.active')
			toggleActive($activeCard, e.target);
		});
	});

	// When clicking the arrows (mobile only)
	document.querySelectorAll(".card-row .arrow").forEach((el, i) =>
	{
		el.addEventListener('click', (e) =>
		{
			const $activeCard = document.querySelector('.card-row .card.active')

			let $newElement;
			if(i === 0) // Left
			{
				$newElement = $activeCard.previousElementSibling;
				if($newElement.className === "arrow")
					$newElement = document.querySelector('.card-row .card:not(.active):last-of-type')
			}
			else if(i === 1) // Right
			{
				$newElement = $activeCard.nextElementSibling;
				if($newElement.className === "arrow")
					$newElement = document.querySelector('.card-row .card:not(.active)')
			}

			toggleActive($activeCard, $newElement)
		})
	});
});