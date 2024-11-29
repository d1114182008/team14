function searchTable() {
    let input = document.getElementById('searchInput');
    let filter = input.value.toLowerCase();
    let table = document.getElementById('dataTable');
    let tr = table.getElementsByTagName('tr');
    let noResultsDiv = document.getElementById('noResults');
    let suggestionDiv = document.getElementById('suggestion');
    let found = false;

    suggestionDiv.innerHTML = '';
    noResultsDiv.style.display = 'none';

    for (let i = 1; i < tr.length; i++) {
      let td = tr[i].getElementsByTagName('td');
      for (let j = 0; j < td.length; j++) {
        td[j].innerHTML = td[j].innerHTML.replace(/<span class="highlight">/g, '').replace(/<\/span>/g, '');
      }
    }

    if (filter === '') {
      for (let i = 1; i < tr.length; i++) {
        tr[i].style.display = '';
      }
      return;
    }

    for (let i = 1; i < tr.length; i++) {
      let td = tr[i].getElementsByTagName('td');
      let rowVisible = false;

      for (let j = 0; j < td.length; j++) {
        if (td[j]) {
          let cellText = td[j].textContent.toLowerCase();
          if (cellText.indexOf(filter) > -1) {
            rowVisible = true;

            let highlightedText = td[j].innerHTML.replace(new RegExp(filter, 'gi'), (match) => {
              return `<span class="highlight">${match}</span>`;
            });
            td[j].innerHTML = highlightedText;
          }
        }
      }

      if (rowVisible) {
        tr[i].style.display = '';
        found = true;
      } else {
        tr[i].style.display = 'none';
      }
    }

    if (!found && filter !== '') {
      noResultsDiv.style.display = 'block';
    } else {
      noResultsDiv.style.display = 'none';
    }

    if (filter.length > 0) {
      suggestionDiv.innerHTML = `目前搜尋: "${filter}"`;
    } else {
      suggestionDiv.innerHTML = '';
    }
  }
 function goBack() {
    window.history.back();
 }