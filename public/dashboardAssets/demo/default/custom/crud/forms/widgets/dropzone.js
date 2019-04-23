// var DropzoneDemo = {
//     init: function () {
//         Dropzone.options.mDropzoneOne = {
//             paramName: "file",
//             maxFiles: 1,
//             maxFilesize: 5,
//             addRemoveLinks: !0,
//             dictFileTooBig: 'Image is larger than 5MB',
//             acceptedFiles: "image/*",
//             autoProcessQueue:false,
//             accept: function (file,response) {
//                 console.log(response);
//                 var input_val = $('#images').val();
//                 $('#images').attr('value',response+" "+ input_val)
//             }
//         }, Dropzone.options.mDropzoneTwo = {
//             paramName: "file",
//             maxFiles: 10,
//             maxFilesize: 10,
//             addRemoveLinks: !0,
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }, Dropzone.options.mDropzoneThree = {
//             paramName: "file",
//             maxFiles: 10,
//             maxFilesize: 10,
//             addRemoveLinks: !0,
//             acceptedFiles: "image/*,application/pdf,.psd",
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }
//     }
// };
// DropzoneDemo.init();

// var DropzoneDemo = {
//     init: function ()
//     {
//         Dropzone.options.mDropzoneThree =
//             {
//                 paramName: "file",
//                 maxFiles: 1,
//                 maxFilesize: 5,
//                 addRemoveLinks: !0,
//                 success: function(file,response){
//                     alert(response);
//                     var input_val = $('#images').val();
//                     $('#images').attr('value',response)
//                     // $('#images').attr('value',response+" "+ input_val)
//                 },
//                 error:function(file,response){
//                     console.log(response);
//                 }
//             }
//     }
// }; DropzoneDemo.init();


var DropzoneDemo = {
    init: function ()
    {
        Dropzone.options.mDropzoneThree =
            {
                paramName: "file",
                maxFiles: 1,
                maxFilesize: 5,
                addRemoveLinks: !0,
                success: function(file,response){
                    console.log(response);
                    var input_val = $('#images').val();
                    $('#images').attr('value',response+" "+ input_val)
                },
                error:function(file,response){
                    console.log(response);
                }
            }
    }
}; DropzoneDemo.init();