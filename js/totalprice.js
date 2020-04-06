
   var table = document.getElementById("table"), sumPrice = 0, pricecar=0, priceonecar=0, durationdays=0, finalPrice=0, numCar=0;
            
            for(var i = 1; i < table.rows.length; i++)
            {

                durationdays = parseInt(table.rows[i].cells[2].innerHTML);
                pricecar = parseInt(table.rows[i].cells[3].innerHTML);
                //if the car built below 2010 discount 7%
               
                if (parseInt(table.rows[i].cells[1].innerHTML) <=2010) {
                
                priceonecar = (pricecar - (pricecar * 0.07));
                //if rent for 3 days discount 5%

                        if (durationdays>=3) {
                            priceonecar = priceonecar- (priceonecar*0.05);

                        } else (priceonecar = priceonecar);

                }else {(priceonecar = pricecar);
                        if (durationdays>=3) {
                        priceonecar = priceonecar- (priceonecar*0.05);

                        } else (priceonecar = priceonecar);
                };

                sumPrice = sumPrice + (priceonecar * durationdays);             
                        numCar=numCar+1;                                   

            }
            //if rent 2 car or more discount 10%
            if (numCar>=2) {
                    finalPrice = sumPrice - (sumPrice*0.1);
                    
                } else (finalPrice = sumPrice);

             document.getElementById("val").innerHTML = "Price Total = Rp. " + finalPrice;
                    console.log(finalPrice);
                   
                
            
            
       
           