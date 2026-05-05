function set_period_label() {
  var t = $("#dLabel").text().trim(),
    e = $(".checkboxgroup input[value='" + t + "']").parent().text();
  null === e && (e = "custom"), $(".checkboxgroup input[value='" + t + "']").prop("checked", "checked"), d3.select("#dLabel").text(e.trim() + " ").append("span").attr("class", "fa fa-chevron-down").style("margin-left", "9px"), d3.selectAll(".period-label").text("(" + e.trim() + ")").style("font-size", "14px")
}
$(document).ready(function() {
  set_period_label()
}), $(".checkboxgroup").click(function() {
  function t(t) {
    var e = t.attr("start-data-value"),
      a = t.attr("end-data-value"),
      o = t.val(),
      c = "?start_date=" + e + "&end_date=" + a + "&compare_type=" + o;
    return c
  }
  $(".checkboxgroup input").prop("checked", !1);
  var e = $(this).find("input").prop("checked", "checked"),
    a = t(e),
    o = window.location.origin;
  "custom" == e.val() ? $("#filter-custom").modal("show") : $(location).attr("href", o + a)
}), $("#filter-custom-submit").click(function() {
  var t = $("#start_date_field").val(),
    e = $("#end_date_field").val(),
    a = "custom",
    o = "?start_date=" + t + "&end_date=" + e + "&compare_type=" + a,
    c = window.location.origin;
  $(location).attr("href", c + o)
}), $(".close-getting-started").click(function(t) {
  t.stopPropagation(), $("#confirm-modal-get-started").modal("show")
});
