<script>
        var myreportname = @json($reportname);
        var myreportdate = @json($reportdaterange2);
        $(function () {
            $("#tdynamic").DataTable({
                layout: {
                    bottomStart: {
                      //buttons: ['copy', 'excel', 'pdf','print']
                    buttons: [
                                { 
                                    extend:'print'
                                },
                                {
                                    extend:'excel',
                                    filename: myreportname + ' - ' + myreportdate,
                                    title: null,    
                                },
                                {
                                    //extend: '',
                                    split: [
                                        {
                                        extend:'copy',
                                        }, 
                                        //{
                                        //  extend:'csv',
                                        //  filename: myreportname + ' - ' + myreportdate
                                        // }, 
                                        //{ 
                                            //extend:'pdfHtml5',
                                            ////orientation: 'landscape',
                                            ////pageSize: 'A1',
                                            //filename: myreportname + ' - ' + myreportdate,
                                            //title: null
                                        //}, 
                                    ]
                                },  
                            ],
                    }
                },
                autoWidth: true,
                responsive: true,
                paging:true,
                pageLength: 20,
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, 'All'] ] 
            });
        });

        var myData = @json($data);

        // EXTRACT VALUE FOR HTML HEADER. 
        var col = [];
        for (var i = 0; i < myData.length; i++) {
            for (var key in myData[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        // CREATE DYNAMIC TABLE.
        //var table = document.createElement("table");
        var theader = document.getElementById("thdynamic");
        var tbody = document.getElementById("tbdynamic");

        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = theader.insertRow(-1);   // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        var regExp = /[a-zA-Z]/g;
        for (var i = 0; i < myData.length; i++) {

            tr = tbody.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = myData[i][col[j]];
                var myVar = myData[i][col[j]];
                var myVar2 = parseFloat(myVar);
                //debugger;
                if (isNaN(myVar2) == true){
                    tabCell.classList.add("text-left");
                } else {
                    tabCell.classList.add("text-right");
                }
                
            }
        }
    </script>