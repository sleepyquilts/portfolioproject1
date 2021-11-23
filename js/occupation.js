'use strict'

let jobContain = $('#jobs');
$.ajax({

    type: 'GET',
    url: 'https://datausa.io/api/data?Geography=04000US53&measure=Total%20Population,Total%20Population%20MOE%20Appx,Average%20Wage,Average%20Wage%20Appx%20MOE,ygopop%20RCA,Record%20Count&Workforce%20Status=true&Record%20Count%3E=5&drilldowns=Detailed%20Occupation&order=Total%20Population&sort=desc&Total%20Population%3E=1',
    success: function (data) {

        let webObj;
        let isObj;
        let webArr = data.data.map((obj) => {
            if ((obj['Detailed Occupation'] === "Web developers") && (obj.Year === "2019")) {
                webObj = obj;
            };

            if ((obj['Detailed Occupation'] === "Computer & information systems managers") && (obj.Year === "2019")) {
                isObj = obj;
            };


        });
        console.log(webObj);
        console.log(isObj);
        jobContain.append(`<p class="slip">Occupation: ${webObj['Detailed Occupation']}<br> Area: ${webObj['Geography']}<br> Job population: ${webObj['Total Population']}<br> Average wage: $${webObj['Average Wage'].toFixed(2)}</p><br>`);
        jobContain.append(`<p class="slip">Occupation: ${isObj['Detailed Occupation']}<br> Area: ${isObj['Geography']}<br> Job population: ${isObj['Total Population']}<br> Average wage: $${isObj['Average Wage'].toFixed(2)}</p>`);

    }
});