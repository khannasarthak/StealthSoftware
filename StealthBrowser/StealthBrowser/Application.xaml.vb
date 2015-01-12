
Class Application
    ' Application-level events, such as Startup, Exit, and DispatcherUnhandledException
    ' can be handled in this file.
    private WebView webView;

    Public WebForm()
{

    InitializeComponent();

    // Create a windowed WebView instance matching
    // the size of the container.
    webView = WebCore.CreateWebView( 
        this.ClientSize.Width, 
        this.ClientSize.Height, 
        ViewType.Window );
}

protected override void OnHandleCreated(EventArgs e)
{
	base.OnHandleCreated(e);

	if (webView == null)
	    return;

	// Before using a windowed WebView, we need
	// to assign a parent window.    
	webView.ParentWindow = this.Handle;
}
    webView.Source = new Uri( "http://www.google.com" );
End Class






