document.addEventListener('DOMContentLoaded', function () {
    fetchData();
});

function fetchData() {
    // Use Fetch API to send a request to the server
    fetch('php/connection.php')  // Adjust the path based on your project structure
        .then(response => response.json())
        .then(data => {
            displayData(data);
        })
        .catch(error => console.error('Error:', error));
}

function displayData(data) {
    const container = document.getElementById('data-container');
    container.innerHTML = '';

    if (data.length === 0) {
        container.innerHTML = '<p>No data available.</p>';
        return;
    }

    // Send data to HTML
    const table = document.createElement('table');
    table.border = '1';
    table.style.marginTop = '200px';

    // Create table headers
    // const headerRow = document.createElement('tr');
    // for (const key in data[0]) {
    //     const th = document.createElement('th');
    //     th.textContent = key;
    //     headerRow.appendChild(th);
    // }
    // table.appendChild(headerRow);

    // Create table rows
    data.forEach(rowData => 
    {
        let darbinieks =
        {
            vards: '',
            uzvards: '',
        }

        const row = document.createElement('tr');

        for (const key in rowData) {
            const cell = document.createElement('td');
            cell.textContent = rowData[key];
            row.appendChild(cell);
        }
        table.appendChild(row);
    });

    container.appendChild(table);
}
