let dataKey = ['dumb','ways','the','best'];

function compare(word) {
    dataKey.forEach(function (item ) {  
        data = word.search(item);
        if(data >= 0) {
            console.log(item + " => true");
        }else{
            console.log(item + " => false");
        }
  });
}
compare('dumbways');