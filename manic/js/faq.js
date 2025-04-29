document.querySelectorAll(".question").forEach(button => {
    button.addEventListener("click", () => {
      const answer = button.nextElementSibling;
      answer.classList.toggle("visible");
    });
  });