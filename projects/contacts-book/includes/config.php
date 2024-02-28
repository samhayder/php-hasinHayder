<?php
// Define constant value Base URL
define( 'BASEURL', "/php-hasinHayder/projects/contacts-book/" );

// Print Arr
function print_arr( $arr ) {
    echo "<pre>";
    print_r( $arr );
    exit();
}

// Show UI Error Messages
function errorMsg() {
    if ( isset( $_SESSION['errors'] ) ) {
        ?>
<div class="alert alert-danger">
  <p>There are following error(s) fund...</p>
  <?php
foreach ( $_SESSION['errors'] as $error ) {
            print "<li>$error</li>";
        }
        ?>
</div>
<?php
unset( $_SESSION['errors'] );
    }
}

// Show UI Error Messages
function successMsg() {
    if ( isset( $_SESSION['success'] ) ) {
        ?>
<div class="alert alert-success text-center">
  <?php echo $_SESSION['success']; ?>
</div>
<?php
unset( $_SESSION['success'] );
    }
}

// Pagination
function getPagination( $totalRecord, $perPage = 2, $currentPage = 1 ) {
    $totalPage = ceil( $totalRecord / $perPage ) ?? 0;

    $pagination = '';

    if ( $totalPage > 1 ) {
        $pagination .= '<nav>
    <ul class="pagination justify-content-center">';

        $perviousPage = ( $currentPage <= 1 ) ? "disabled" : "";
        $pagination .= '<li class="page-item  ' . $perviousPage . '">
        <a class="page-link" href="' . BASEURL . 'index.php?page=' . ( $currentPage - 1 ) . '">Previous</a>
      </li>';

        for ( $page = 1; $page <= $totalPage; $page++ ) {
            if ( $page == $currentPage ) {
                $pagination .= '<li class="page-item active">
                    <a class="page-link" href="' . BASEURL . 'index.php?page=' . $page . '">' . $page . '</a>
                </li>';
            } else {
                $pagination .= '<li class="page-item">
                    <a class="page-link" href="' . BASEURL . 'index.php?page=' . $page . '">' . $page . '</a>
                </li>';
            }
        }

        $nextPage = ( $currentPage >= $totalPage ) ? "disabled" : "";
        $pagination .= '<li class="page-item ' . $nextPage . '">
        <a class="page-link" href="' . BASEURL . 'index.php?page=' . ( $currentPage + 1 ) . '">Next</a>
      </li>
    </ul>
  </nav>';
    }

    print $pagination;
}
?>
