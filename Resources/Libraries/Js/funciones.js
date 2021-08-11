$(function () {
  getDates();
});
$(document).ready(function () {
  $('#example').DataTable({
    "fnCreatedRow": function (nRow, aData, iDataIndex) {
      $(nRow).attr('id', aData[0]);
    },
    'serverSide': 'true',
    'processing': 'true',
    'paging': 'true',
    'order': [],
    'ajax': {
      'url': 'Model/fetch_data.php',
      'type': 'post',
    },
    "columnDefs": [{
      'target': [5],
      'orderable': false,
    }]
  });
});
function getDates() {
  $('#exampleList').DataTable({
    "fnCreatedRows": function (nRow, aData, iDataIndex) {
      $(nRow).attr('id', aData[0]);
    },
    'serverSide': 'true',
    'processing': 'true',
    'paging': 'true',
    'order': [],
    'ajax': {
      'url': 'Model/fetch_data_list.php',
      'type': 'post',
    },
    "columnDefs": [{
      'target': [5],
      'orderable': false,
    }]
  });
};
$(document).on('submit', '#addUser', function (e) {
  e.preventDefault();
  var city = $('#addCityField').val();
  var username = $('#addUserField').val();
  var mobile = $('#addMobileField').val();
  var email = $('#addEmailField').val();
  if (city != '' && username != '' && mobile != '' && email != '') {
    $.ajax({
      url: "Model/add_user.php",
      type: "post",
      data: {
        city: city,
        username: username,
        mobile: mobile,
        email: email
      },
      success: function (data) {
        var json = JSON.parse(data);
        var status = json.status;
        if (status == 'true') {
          mytable = $('#example').DataTable();
          mytable.draw();
          getDates();
          mytables = $('#exampleList').DataTable();
          mytables.draw();
          $('#addUserModal').modal('hide');
        } else {
          alert('failed');
        }
      }
    });
  } else {
    alert('Fill all the required fields');
  }
});
//Add competitor
$(document).on('submit', '#addUserT', function (e) {
  e.preventDefault();
  var name = $('#addUserName').val();
  var score = $('#addUserScore').val();

  if (name != '' && score != '') {
    $.ajax({
      url: "Model/add_competitor.php",
      type: "post",
      data: {
        name: name,
        score: score,
      },
      success: function (data) {
        var json = JSON.parse(data);
        var status = json.status;
        if (status == 'true') {
          alert('Competidor agregado correctamente!');
          $('#addUserName').val('');
          var score = $('#addUserScore').val('');
          mytable = $('#example').DataTable();
          mytable.draw();
          mytables = $('#exampleList').DataTable();
          mytables.draw();
        } else {
          alert('failed');
        }
      }
    });
  } else {
    alert('Fill all the required fields');
  }
});

$(document).on('submit', '#updateUser', function (e) {
  e.preventDefault();
  //var tr = $(this).closest('tr');
  var name = $('#nameUpdate').val();
  var score = $('#scoreUpdate').val();
  var trid = $('#trid').val();
  var id = $('#id').val();
  if (name != '' && score != '') {
    $.ajax({
      url: "Model/update_user.php",
      type: "post",
      data: {
        name: name,
        score: score,
        id: id
      },
      success: function (data) {
        var json = JSON.parse(data);
        var status = json.status;
        if (status == 'true') {
          alert('Competidor actualizado correctamente!')
          table = $('#example').DataTable();
          var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!" data-bs-toggle="modal" data-id="' + id + '" data-bs-target="#exampleModal" class="btn btn-danger btn-sm">Delete</a></td>';
          var row = table.row("[id='" + trid + "']");
          row.row("[id='" + trid + "']").data([id, name, score, button]);
          $('#exampleModal').modal('hide');
        } else {
          alert('failed');
        }
      }
    });
  } else {
    alert('Debes completar todos los campos');
  }
});
$('#example').on('click', '.editbtn ', function (event) {
  var table = $('#example').DataTable();
  var trid = $(this).closest('tr').attr('id');

  var id = $(this).data('id');
  $('#exampleModal').modal('show');

  $.ajax({
    url: "Model/get_single_data.php",
    data: {
      id: id
    },
    type: 'post',
    success: function (data) {
      var json = JSON.parse(data);
      $('#nameUpdate').val(json.name);
      $('#scoreUpdate').val(json.score);
      $('#id').val(id);
      $('#trid').val(trid);
    }
  })
});

$(document).on('click', '.deleteBtn', function (event) {
  var table = $('#example').DataTable();
  event.preventDefault();
  var id = $(this).data('id');
  if (confirm("Estás seguro de eliminar el competidor? ")) {
    $.ajax({
      url: "Model/delete_user.php",
      data: {
        id: id
      },
      type: "post",
      success: function (data) {
        var json = JSON.parse(data);
        status = json.status;
        if (status == 'success') {
          //table.fnDeleteRow( table.$('#' + id)[0] );
          //$("#example tbody").find(id).remove();
          //table.row($(this).closest("tr")) .remove();
          $("#" + id).closest('tr').remove();
        } else {
          alert('Failed');
          return;
        }
      }
    });
  } else {
    return null;
  }



})
