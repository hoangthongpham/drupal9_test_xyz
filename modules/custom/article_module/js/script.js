// UMD
(function( factory ) {
  "use strict";

  if ( typeof define === 'function' && define.amd ) {
    // AMD
    define( ['jquery'], function ( $ ) {
      return factory( $, window, document );
    } );
  }
  else if ( typeof exports === 'object' ) {
    // CommonJS
    module.exports = function (root, $) {
      if ( ! root ) {
        root = window;
      }

      if ( ! $ ) {
        $ = typeof window !== 'undefined' ?
          require('jquery') :
          require('jquery')( root );
      }

      return factory( $, root, root.document );
    };
  }
  else {
    // Browser
    factory( jQuery, window, document );
  }
}
(function( $, window, document ) {
  $.fn.dataTable.render.moment = function ( from, to, locale ) {
    // Argument shifting
    if ( arguments.length === 1 ) {
      locale = 'en';
      to = from;
      from = 'YYYY-MM-DD';
    }
    else if ( arguments.length === 2 ) {
      locale = 'en';
    }

    return function ( d, type, row ) {
      if (!d) {
        return type === 'sort' || type === 'type' ? 0 : d;
      }

      var m = window.moment( d, from, locale, true );
      // Order and type get a number value from Moment, everything else
      // sees the rendered value
      return m.format( type === 'sort' || type === 'type' ? 'x' : to );
    };
  };
}));

var base_url = window.location.origin+'/drupal9_test_xyz/',
  lang = document.documentElement.lang;
initView({})

function goFilter() {
  $('#datatable1').DataTable().destroy();
  filter={
    language : $('select#filter-language').val(),
    status : $('select#filter-status').val(),
    title :$('input#filter-title').val(),
  }
  initView(filter)
}
function resetFilter() {
  $('select#filter-language').val('All')
  $('select#filter-status').val('All')
  $('input#filter-title').val('')
  $('#datatable1').DataTable().destroy();
  initView({})
}
function initView(filter) {
    $('#datatable1').DataTable({
      ajax: {
        url: 'datatable',
        type: 'POST',
        dataSrc: 'data',
        data: {
          filter: filter
        },
      },
      lengthMenu: [
        [20, 50, 100, -1],
        [20, 50, 100, 'All']
      ],
      searching: false,
      serverSide: true,
      processing: true,
      columns: [{
        data: 'node_field_data_title',
        width:'450'
      },
        {
          data: 'user_name'
        },
        {
          data: 'node_field_data_langcode'
        },

        {
          data: 'node_field_data_changed'
        },
        {
          data: 'node_field_data_status'
        }
      ],
      columnDefs: [
        {
          targets: 3,
          render: $.fn.dataTable.render.moment( 'X', 'yyyy-MM-DD H:ss' )
        },
        {
          targets: 4,
          render: function(data, type, row) {
            if(row.node_field_data_status==1)
              return Drupal.t('Published')
            else
              return Drupal.t('Unpublished')
          }
        },
        {
          "render": function(data, type, row) {
            return `
             <div class="btn-group">
              <a href="${base_url}/article/edit/${row.nid}" class="btn btn-sm btn-secondary">${Drupal.t('Edit')}</a>
              <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-sm">
                <li><a class="dropdown-item" href="#">${Drupal.t('Translate')}</a></li>
                <li><a class="dropdown-item" href="#" onClick="DeleteArticle(${row.nid})">${Drupal.t('Delete')}</a></li>
              </ul>
            </div>
          `;
          },
          "targets": 5,
          'searchable': false,
          'orderable': false,
        }
      ],
      select: {
        style: 'os',
        selector: 'td:first-child'
      },
      order: [
        [2, 'desc']
      ],
    });
}
function DeleteArticle(nodeID) {
  let text = Drupal.t('This action cannot be undone');
  if (confirm(text) == true) {
    $.ajax({
      url: base_url +`article/destroy/${nodeID}`,
      type: 'GET',
      dataType: 'json',
      contentType: "application/json",
    }).done(function(response) {
      $('#datatable1').DataTable().ajax.reload()
    });
  }
}





