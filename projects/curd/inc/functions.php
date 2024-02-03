<?php
define( "DB_NAME", "D:\\php-hasinHayder\\projects\\curd\\data\\db.txt" );
function seed() {
    $data = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll'  => '11',
        ),
        array(
            'id'    => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll'  => '12',
        ),
        array(
            'id'    => 3,
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll'  => '9',
        ),
    );

    // Serialize Data
    $serializeData = serialize( $data );

    // seeding file
    file_put_contents( DB_NAME, $serializeData, LOCK_EX );
};

// show seeding data UI
function generateReport() {
    // Receive seeding file
    $getData = file_get_contents( DB_NAME );

    // seeding file unserialize
    $students = unserialize( $getData );

    ?>

<table>
   <thead>
      <th>Name</th>
      <th>Roll</th>
      <th>Action</th>
   </thead>

   <?php
foreach ( $students as $student ) {
        ?>
   <tr>
      <td><?php printf( "%s %s", $student['fname'], $student['lname'] );?>
      </td>
      <td><?php printf( "%s", $student['roll'] );?>
      </td>
      <td>
         <?php printf( "<a href='/?task=edit&id=%s'>Edit</a> | <a href='/?task=delete&id=%s' class='delete'>Delete</a>", $student['id'], $student['id'] );?>
      </td>
   </tr>
   <?php
}
    ?>
</table>
<?php

}

// Add Students function
function addStudent( $fname, $lname, $roll ) {
    $isDuplicateRoll = false;

    //get data & unserialize
    $getData = file_get_contents( DB_NAME );
    $students = unserialize( $getData );

    // Check duplicate roll number
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll ) {
            $isDuplicateRoll = true;
            break;
        }
    }

    if ( !$isDuplicateRoll ) {

        $newId = count( $students ) + 1;
        $student = array(
            "id"    => getNewId( $students ),
            "fname" => ucwords( $fname ),
            "lname" => ucfirst( $lname ),
            "roll"  => $roll,
        );

        array_push( $students, $student );

        //put data & serialize
        $serializeData = serialize( $students );
        file_put_contents( DB_NAME, $serializeData, LOCK_EX );

        return true;
    }

    return false;
}

// Get new id
function getNewId( $students ) {
    $maxId = max( array_column( $students, "id" ) );
    return $maxId + 1;
}

// Get Student data use Edit
function getStudent( $id ) {
    //get data & unserialize
    $getData = file_get_contents( DB_NAME );
    $students = unserialize( $getData );

    foreach ( $students as $student ) {
        if ( $student['id'] == $id ) {
            return $student;
        }
    }
    return false;
}

// Update Student when edit task
function updateStudent( $id, $fname, $lname, $roll ) {
    $isDuplicateRoll = false;

    //get data & unserialize
    $getData = file_get_contents( DB_NAME );
    $students = unserialize( $getData );

    // Check duplicate roll number
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll && $_student['id'] != $id ) {
            $isDuplicateRoll = true;
            break;
        }
    }

    if ( !$isDuplicateRoll ) {

        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;

        //put data & serialize
        $serializeData = serialize( $students );
        file_put_contents( DB_NAME, $serializeData, LOCK_EX );

        return true;
    }

    return false;

}

// Remove Student
function removeStudent( $id ) {
    //get data & unserialize
    $getData = file_get_contents( DB_NAME );
    $students = unserialize( $getData );

    foreach ( $students as $offset => $student ) {
        if ( $student['id'] == $id ) {
            unset( $students[$offset] );
        }
    }

//put data & serialize
    $serializeData = serialize( $students );
    file_put_contents( DB_NAME, $serializeData, LOCK_EX );

}
