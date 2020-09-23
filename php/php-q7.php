#unieq_names

The difference between include and require arises when the file being included cannot be found: include will emit a warning (E_WARNING) and the script will continue, whereas require will emit a fatal error (E_COMPILE_ERROR) and halt the script. If the file being included is critical to the rest of the script running correctly then you need to use require.