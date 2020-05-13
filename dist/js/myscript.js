$(document).ready(function() {

  // Add Class
  $('.edit').click(function() {
      $(this).addClass('editMode');
  });

  // Save data
  $(".edit").focusout(function() {
      $(this).removeClass("editMode");
      var id = this.id;
      var split_id = id.split("_");
      var field_name = split_id[0];
      var edit_id = split_id[1];
      var value = $(this).text();

      $.ajax({
          url: 'officials-name(code).php',
          type: 'post',
          data: { field: field_name, value: value, id: edit_id },
          success: function(response) {
              console.log('Save successfully');
          }
      });

  });

});


$(function () {
  //add active link on menu
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf("/") + 1);
  if (filename) {
    $(".nav-sidebar li").removeClass("active");
  }
  $('.nav-sidebar li a[href="' + filename + '"]')
    .parent("li")
    .addClass("active");

  //end
});

//confirmation when click
$(".confirmationarchive").on("click", function () {
  var confirmation = confirm("Are you sure to add this to archive");
  if (confirmation) {
    return true;
  }
  return false;
});

//confirmation when click
$(".confirmationunarchive").on("click", function () {
  var confirmation = confirm("Are you sure to remove this to archive");
  if (confirmation) {
    return true;
  }
  return false;
});

//confirmation when click
$(".confirmation").on("click", function () {
  var confirmation = confirm("Are you sure to add this");
  if (confirmation) {
    return true;
  }
  return false;
});

//confirmation when click
$(".confirmationdel").on("click", function () {
  var confirmation = confirm("Are you sure to remove this");
  if (confirmation) {
    return true;
  }
  return false;
});

//confirmation when click
$(".confirmationassign").on("click", function () {
  var confirmation = confirm("Are you sure to assign this");
  if (confirmation) {
    return true;
  }
  return false;
});

$(function () {
  $("#residents").DataTable({
    order: [0, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

$(function () {
  $("#selectresidents").DataTable({
    order: [1, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

$(function () {
  $("#health").DataTable({
    order: [5, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

$(function () {
  $("#households").DataTable({
    order: [0, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

$(function () {
  $("#selecthouseholds").DataTable({
    order: [1, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

$(function () {
  $("#disaster").DataTable({
    order: [4, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

$(function () {
  $("#accounts").DataTable({
    order: [0, "asc"],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
  });
});

//ADD-RESIDENT
$(".addresident").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_addresident").submit(function (e) {
  $.post("add-resident(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Added.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

$(".updateresident").on("click", function () {
  var confirmation = confirm("Are you sure to Update this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_updateresident").submit(function (e) {
  $.post("update-resident(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Updated.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

//Household
$(".addhousehold").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_addhousehold").submit(function (e) {
  $.post("add-household(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Added.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

$(".updatehousehold").on("click", function () {
  var confirmation = confirm("Are you sure to Update this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_updatehousehold").submit(function (e) {
  $.post("update-household(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Updated.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

//SETTINGS
$(".updatesettings").on("click", function () {
  var confirmation = confirm("Are you sure to Update this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_settings").submit(function (e) {
  $.post("settings(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Updated.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

//add-account
$(".addaccount").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_add_account").on("submit", function (e) {
  e.preventDefault();
  if ($("#password").val() != $("#cpassword").val()) {
    $("#passwordError").show();
  } else {
    $(this).unbind("submit").submit();
  }
});

$(".updateaccount").on("click", function () {
  var confirmation = confirm("Are you sure to Update this");
  if (confirmation) {
    return true;
  }
  return false;
});

//duplicate password - changepassword
$("#changePassword").on("submit", function (e) {
  e.preventDefault();
  if ($("#password").val() != $("#cpassword").val()) {
    $("#passwordError").show();
  } else {
    $(this).unbind("submit").submit();
  }
});

$("#changePassword").submit(function (e) {
  $.post("change-password(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Updated.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

//DISASTER
$(".adddisaster").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_adddisaster").submit(function (e) {
  $.post("add-disaster(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Added.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

$(".updatedisaster").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_updatedisaster").submit(function (e) {
  $.post("update-disaster(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Added.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

//HEALTH
$(".addhealth").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_addhealth").submit(function (e) {
  $.post("add-health(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Added.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});

$(".updatehealth").on("click", function () {
  var confirmation = confirm("Are you sure to ADD this");
  if (confirmation) {
    return true;
  }
  return false;
});

$("#form_updatehealth").submit(function (e) {
  $.post("update-health(code).php", $(this).serialize(), function (data) {
    if (data == "Successfully Added.") {
      alert(data);
      location.reload();
    } else {
      alert(data);
    }
  });
  e.preventDefault();
});
