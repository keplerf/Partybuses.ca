class SifrStyleSheet extends TextField.StyleSheet
{
    var getStyle, setStyle, fontSize;
    function SifrStyleSheet()
    {
        super();
    } // End of the function
    function parseCSS(cssText)
    {
        var _loc8 = new TextField.StyleSheet();
        var _loc9 = _loc8.parseCSS(cssText);
        if (!_loc9)
        {
            return (false);
        } // end if
        var _loc6 = _loc8.getStyleNames();
        for (var _loc4 = _loc6.length - 1; _loc4 >= 0; --_loc4)
        {
            var _loc5 = _loc6[_loc4];
            var _loc2 = _loc8.getStyle(_loc5);
            var _loc3 = this.getStyle(_loc5) || _loc2;
            if (_loc3 != _loc2)
            {
                for (var _loc7 in _loc2)
                {
                    _loc3[_loc7] = _loc2[_loc7];
                } // end of for...in
            } // end if
            this.setStyle(_loc5, _loc3);
        } // end of for
        return (true);
    } // End of the function
    function applyLeading(format, leading)
    {
        latestLeading = leading;
        if (leading >= 0)
        {
            format.leading = leading;
            return (format);
        } // end if
        var _loc3 = new TextFormat(null, null, null, null, null, null, null, null, null, null, null, null, leading);
        for (var _loc4 in format)
        {
            if (_loc4 != "leading")
            {
                _loc3[_loc4] = format[_loc4];
            } // end if
        } // end of for...in
        return (_loc3);
    } // End of the function
    function transform(style)
    {
        var _loc5 = super.transform(style);
        if (style.leading)
        {
            _loc5 = this.applyLeading(_loc5, style.leading);
        } // end if
        if (style.letterSpacing)
        {
            _loc5.letterSpacing = style.letterSpacing;
        } // end if
        if (fontSize && style.fontSize && style.fontSize.indexOf("%"))
        {
            _loc5.size = fontSize * parseInt(style.fontSize) / 100;
        } // end if
        _loc5.kerning = _root.kerning == "true" || _root.kerning != "false" || sIFR.defaultKerning;
        return (_loc5);
    } // End of the function
    var latestLeading = 0;
} // End of Class
