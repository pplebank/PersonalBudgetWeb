

let incomesDate = document.getElementById("incomesDate");
let incomesCategory = document.getElementById("incomesCategory");
let incomesAmount = document.getElementById("incomesAmount");
let expensesDate = document.getElementById("expensesDate");
let expensesCategory = document.getElementById("expensesCategory");
let expensesAmount = document.getElementById("expensesAmount");

let incomesTable = document.getElementById("incomes");
let expensesTable = document.getElementById("expenses");
let summaryIncomesTable = document.getElementById("summaryIncomes");
let summaryExpensesTable = document.getElementById("summaryExpenses");

incomesDate.addEventListener("click",function(){sortStrings(incomesTable,0);});
incomesCategory.addEventListener("click",function(){sortStrings(incomesTable,1);});
incomesAmount.addEventListener("click",function(){sortNumbers(incomesTable,2);});

expensesDate.addEventListener("click",function(){sortStrings(expensesTable,0);});
expensesCategory.addEventListener("click",function(){sortStrings(expensesTable,1);});
expensesAmount.addEventListener("click",function(){sortNumbers(expensesTable,2);});


function sortStrings(table,columnInTable) {
	let row, switching, i, previousElement, nextElement, switchFlag, direction, switchDoneCount = 0;
	
	
	switching = true;
	direction = "ascending"; 
	while (switching) {
		switching = false;
		row = table.rows;
		for (i = 1; i < (row.length - 1); i++) {
			switchFlag = false;
			
			previousElement = row[i].getElementsByTagName("TD")[columnInTable];
			nextElement = row[i + 1].getElementsByTagName("TD")[columnInTable];
			if (direction == "ascending") {
				if (previousElement.innerHTML.toLowerCase() > nextElement.innerHTML.toLowerCase()) {
					switchFlag = true;
					break;
				}
				} else if (direction == "descending") {
				if (previousElement.innerHTML.toLowerCase() < nextElement.innerHTML.toLowerCase()) {
					switchFlag = true;
					break;
				}
			}
		}
		if (switchFlag) {
			row[i].parentNode.insertBefore(row[i + 1], row[i]);
			switching = true;
			switchDoneCount ++;      
			} else {
			if (switchDoneCount == 0 && direction == "ascending") {
				direction = "descending";
				switching = true;
			}
		}
	}
}



function sortNumbers(table,columnInTable) {
	let row, switching, i, previousElement, nextElement, switchFlag, direction, switchDoneCount = 0;
	
	switching = true;
	direction = "ascending"; 
	while (switching) {
		switching = false;
		row = table.rows;
		for (i = 1; i < (row.length - 1); i++) {
			switchFlag = false;
			
			previousElement = row[i].getElementsByTagName("TD")[columnInTable];
			nextElement = row[i + 1].getElementsByTagName("TD")[columnInTable];
			if (direction == "ascending") {
				if (Number(previousElement.innerHTML) > Number(nextElement.innerHTML)) {
					switchFlag = true;
					break;
				}
				} else if (direction == "descending") {
				if (Number(previousElement.innerHTML) < Number(nextElement.innerHTML)) {
					switchFlag = true;
					break;
				}
			}
		}
		if (switchFlag) {
			row[i].parentNode.insertBefore(row[i + 1], row[i]);
			switching = true;
			switchDoneCount ++;      
			} else {
			if (switchDoneCount == 0 && direction == "ascending") {
				direction = "descending";
				switching = true;
			}
		}
	}
}


window.onload = function(){
	calculateBalance(incomesTable,summaryIncomesTable);
	calculateBalance(expensesTable,summaryExpensesTable);
	sum(summaryIncomesTable,totalIncomes,'+');
	sum(summaryExpensesTable,totalExpenses,'-');
	balance();
};

function calculateBalance(tableWithRecords,tableSummary){
	let rowsInRecordsTable = tableWithRecords.rows;
	let rowsInSummaryTable;
	for (i = 1; i < (rowsInRecordsTable.length); i++) {
		rowsInSummaryTable = tableSummary.rows;
		let categoryCellRecords = rowsInRecordsTable[i].getElementsByTagName("TD")[1];
		
		let	amountCellRecords = rowsInRecordsTable[i].getElementsByTagName("TD")[2];
		let positionOfCategoryInSummaryTable = iteratorCategoryInSummaryTable(rowsInSummaryTable,categoryCellRecords);
		
		if (positionOfCategoryInSummaryTable!=0){
			
			let amountCellSummary = rowsInSummaryTable[positionOfCategoryInSummaryTable].getElementsByTagName("TD")[1];
			
			let amountCellSummaryValue = amountCellSummary.innerText;
			let amountCellRecordsValue = amountCellRecords.innerText;
			let sum = Number(amountCellSummaryValue) + Number(amountCellRecordsValue);
			console.log(sum);
			amountCellSummary.innerText = sum; 
		}
		else{
			let newRow =  document.createElement("TR"); 
			let newCategoryCell = document.createElement("TD");   	
			let newAmountCell = document.createElement("TD"); 
			newCategoryCell.innerText = categoryCellRecords.innerText;
			newAmountCell.innerText = amountCellRecords.innerText;
			newRow.appendChild(newCategoryCell);
			newRow.appendChild(newAmountCell);
			tableSummary.appendChild(newRow);
		}
	}
	sortNumbers(tableSummary,1);
}	


function iteratorCategoryInSummaryTable(rowsInSummaryTable,categoryCellRecords){
	
	for (let i = 1; i < (rowsInSummaryTable.length); i++){
		
		let categoryCellSummary = rowsInSummaryTable[i].getElementsByTagName("TD")[0];
		
		if (categoryCellSummary.innerText == categoryCellRecords.innerText){	
			return i;	
		}
	}
	return 0;
}	

function sum(table,id, sign){
	let sum = 0;
	rowsInTable = table.rows;
	for (i = 1; i < (rowsInTable.length); i++){
		let amountCell = rowsInTable[i].getElementsByTagName("TD")[1];
		amountCellvalue = amountCell.innerText;
		sum+=Number(amountCellvalue);
	}
	let cellWithResult = document.getElementById(id);
	id.innerText =sign+sum;
}	

function balance(){
	
	let totalIncomes = document.getElementById("totalIncomes");
	let totalExpenses = document.getElementById("totalExpenses");
	
	let sum = 0;
	sum =Number(totalIncomes.innerText)+Number(totalExpenses.innerText);
	let totalBalance = document.getElementById("totalBalance");
	totalBalance.innerText = sum;
	let comment = document.getElementById("comment");
	
	if (sum > 0 ){	
	comment.innerText=("You are doing great! Keep going!");
	comment.style.color = "green";
	}
	else{
	comment.innerText=("You are in the red!");
	comment.style.color = "red";	
	}
}
