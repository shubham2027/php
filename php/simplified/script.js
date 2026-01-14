document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('portfolioForm');
    const skillsContainer = document.getElementById('skillsContainer');
    const addSkillBtn = document.getElementById('addSkill');

    // Add skill field
    addSkillBtn.addEventListener('click', function() {
        const div = document.createElement('div');
        div.className = 'flex gap-2 mb-2';
        div.innerHTML = `
            <input type="text" name="skills[]" class="flex-grow p-2 bg-gray-800 border border-gray-700 rounded">
            <button type="button" class="remove-skill bg-red-600 text-white px-3 py-1 rounded">
                Remove
            </button>
        `;
        skillsContainer.appendChild(div);

        // Add remove functionality
        div.querySelector('.remove-skill').addEventListener('click', function() {
            div.remove();
        });
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        const requiredFields = ['fullName', 'profession', 'aboutMe'];
        let isValid = true;

        requiredFields.forEach(field => {
            const input = form.querySelector(`[name="${field}"]`);
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('border-red-500');
            } else {
                input.classList.remove('border-red-500');
            }
        });

        if (isValid) {
            // In a real app, you would send data to server here
            alert('Portfolio created successfully!');
            // For now, just show a success message
            form.reset();
        } else {
            alert('Please fill in all required fields.');
        }
    });
});