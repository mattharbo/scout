var eventstable = [];
    
$.ajax({
    url: "./jsondata/new_map_data.json",
    
    success: function (data) {
        eventstable = data.slice(0);
    }
});

console.log(eventstable);