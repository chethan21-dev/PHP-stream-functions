PHP Stream Functions - 
1. Streams are the way of generalizing file, network, data compression, and other operations which share a common set of functions and uses.
2. In its simplest definition, a stream is a resource object which exhibits streamable behavior. 
3. It can be read from or written to in a linear fashion, and may be able to fseek() to an arbitrary location within the stream.
4. A wrapper is additional code which tells the stream how to handle specific protocols/encodings.

Installation - 
The Stream functions are part of the PHP core. There is no installation needed to use these functions.

PHP Stream Functions - 
1. set_socket_blocking() - 
The socket_set_blocking() function is an alias of the stream_get_meta_data() function.

2. stream_bucket_prepend() - 
This function can be called to prepend a bucket to a bucket brigade. It is typically called from php_user_filter::filter(). 

3. stream_context_create() - 
Creates and returns a stream context with any options supplied in options preset. 

4. stream_context_get_default() - 
Returns the default stream context which is used whenever file operations (fopen(), file_get_contents(), etc...) are called without a context parameter. 
Options for the default context can optionally be specified with this function using the same syntax as stream_context_create(). 

5. stream_context_get_options() - 
Returns an array of options on the specified stream or context.

6. stream_context_get_params() - 
Retrieves parameter and options information from the stream or context. 

7. stream_context_set_default() - 
Set the default stream context which will be used whenever file operations (fopen(), file_get_contents(), etc...) are called without a context parameter. 
Uses the same syntax as stream_context_create(). 

8. stream_context_set_options() - 
Sets an option on the specified context. value is set to option for wrapper. 	 

9. stream_context_set_params() - 
Sets parameters on the specified context. 

10. stream_copy_to_stream() - 
Copies data from one stream to another

11. stream_filter_append() - 
Appends a filter to a stream

12. stream_filter_prepend() - 
Adds filtername to the list of filters attached to stream.  

13. stream_filter_register() - 
stream_filter_register() allows you to implement your own filter on any registered stream used with all the other filesystem functions (such as fopen(), fread() etc.). 	 

14. stream_filter_remove() - 
Removes a stream filter previously added to a stream with stream_filter_prepend() or stream_filter_append(). 
Any data remaining in the filter's internal buffer will be flushed through to the next filter before removing it.  

15. stream_get_contents() - 
Identical to file_get_contents(), except that stream_get_contents() operates on an already open stream resource and returns the remaining contents in a string, up to length bytes and starting at the specified offset. 

16. stream_get_filters() - 
Retrieve the list of registered filters on the running system.  

17. stream_get_line() - 
This function is nearly identical to fgets() except in that it allows end of line delimiters other than the standard \n, \r, and \r\n, and does not return the delimiter itself.  	 

18. stream_get_meta_data() - 
Retrieves header/meta data from streams/file pointers	 

19. stream_get_transports() - 
Retrieve list of registered socket transports 

20. stream_get_wrappers() - 
Retrieve list of registered streams 	 

21. stream_is_local() - 
Checks if a stream, or a URL, is a local one or not. 	 

22. stream_isatty() - 
Determines if stream stream refers to a valid terminal type device. 
This is a more portable version of posix_isatty(), since it works on Windows systems too. 

23. stream_notification_callback() - 
A callable function, used by the notification context parameter, called during an event. 	 

24. stream_register_wrapper() - 
Alias of stream_wrapper_register()

25. stream_resolve_include_path() - 
Resolve filename against the include path according to the same rules as fopen()/include.  	 

26. stream_select() - 
The stream_select() function accepts arrays of streams and waits for them to change status. 
Its operation is equivalent to that of the socket_select() function except in that it acts on streams. 	 

27. stream_set_blocking() - 
Sets blocking or non-blocking mode on a stream.
This function works for any stream that supports non-blocking mode (currently, regular files and socket streams). 	 

28. stream_set_chunk_size() - 
Set the stream chunk size	 

29. stream_set_read_buffer() - 
Sets the read buffer. 
It's the equivalent of stream_set_write_buffer(), but for read operations.	 

30. stream_set_timeout() - 
Sets the timeout value on stream, expressed in the sum of seconds and microseconds.
When the stream times out, the 'timed_out' key of the array returned by stream_get_meta_data() is set to true, although no error/warning is generated. 	 

31. stream_set_write_buffer() - 
Sets the buffering for write operations on the given stream to size bytes.  

32. stream_socket_accept() - 
Accept a connection on a socket previously created by stream_socket_server(). 	 

33. stream_socket_client() - 
Initiates a stream or datagram connection to the destination specified by address. 
The type of socket created is determined by the transport specified using standard URL formatting: transport://target. 
For Internet Domain sockets (AF_INET) such as TCP and UDP, the target portion of the address parameter should consist of a hostname or IP address followed by a colon and a port number. 
For Unix domain sockets, the target portion should point to the socket file on the filesystem. 

34. stream_socket_enable_crypto() - 
Enable or disable encryption on the stream.
Once the crypto settings are established, cryptography can be turned on and off dynamically by passing true or false in the enable parameter.  	 

35. stream_socket_get_name() - 
Returns the local or remote name of a given socket connection.  	 

36. stream_socket_pair() - 
stream_socket_pair() creates a pair of connected, indistinguishable socket streams. 
This function is commonly used in IPC (Inter-Process Communication).  	 

37. stream_socket_recvfrom() - 
stream_socket_recvfrom() accepts data from a remote socket up to length bytes.  	 

38. stream_socket_sendto() - 
Sends the specified data through the socket.  	 

39. stream_socket_server() - 
Creates a stream or datagram socket on the specified address.
This function only creates a socket, to begin accepting connections use stream_socket_accept(). 	 

40. stream_socket_shutdown() - 
Shutdown a full-duplex connection 	 

41. stream_supports_lock() - 
Tells whether the stream supports locking through flock().  	 

42. stream_wrapper_register() - 
Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as fopen(), fread() etc.).  	 

43. stream_wrapper_restore() - 
Restores a built-in wrapper previously unregistered with stream_wrapper_unregister(). 	 

44. stream_wrapper_unregister() - 
Allows you to disable an already defined stream wrapper. 
Once the wrapper has been disabled you may override it with a user-defined wrapper using stream_wrapper_register() or reenable it later on with stream_wrapper_restore(). 	 
