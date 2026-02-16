const faculties = {
    'Arts': ['English', 'History', 'Philosophy', 'Religious Studies'],
    'Science': ['Biochemistry', 'Biology', 'Chemistry', 'Physics', 'Computer Science', 'Mathematics'],
    'Engineering': ['Civil Engineering', 'Electrical Engineering', 'Mechanical Engineering'],
    'Social Sciences': ['Economics', 'Political Science', 'Psychology', 'Sociology'],
    'Management Sciences': ['Accounting', 'Business Administration', 'Public Administration'],
    'Education': ['Educational Management', 'Guidance and Counseling', 'Library Science'],
    'Law': ['Private Law', 'Public Law', 'Commercial Law']
};


const facultySelect = document.getElementById('inputFaculty');
const departmentSelect = document.getElementById('inputDepartment');

for (const faculty in faculties) {
    const option = document.createElement('option');
    option.value = faculty;
    option.textContent = faculty;
    facultySelect.appendChild(option);
}

facultySelect.addEventListener('change', function() {
    departmentSelect.innerHTML = '<option value="">Choose..</option>';
    const selectedFaculty = facultySelect.value;
    if (selectedFaculty && faculties[selectedFaculty]) {
        faculties[selectedFaculty].forEach(department => {
            const option = document.createElement('option');
            option.value = department;
            option.textContent = department;
            departmentSelect.appendChild(option);
        });
    }
});