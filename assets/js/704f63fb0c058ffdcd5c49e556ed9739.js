/**
 * Created by Roel on 11/12/2015.
 */
function validateinput(TCode){

    if( !/^[A-Za-z0-9- ]+$/.test( TCode ) ) {
        //alert('Input is not alphanumeric');
        return false;
    }

    return true;
}