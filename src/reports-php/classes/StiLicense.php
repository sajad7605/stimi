<?php

namespace Stimulsoft;

class StiLicense
{
    public $isHtmlRendered = false;
    private $licenseKey = "6vJhGtLLLz2GNviWmUTrhSqnOItdDwjBylQzQcAOiHkgpgFGkUl79uxVs8X+uspx6K+tqdtOB5G1S6PFPRrlVNvMUiSiNYl724EZbrUAWwAYHlGLRbvxMviMExTh2l9xZJ2xc4K1z3ZVudRpQpuDdFq+fe0wKXSKlB6okl0hUd2ikQHfyzsAN8fJltqvGRa5LI8BFkA/f7tffwK6jzW5xYYhHxQpU3hy4fmKo/BSg6yKAoUq3yMZTG6tWeKnWcI6ftCDxEHd30EjMISNn1LCdLN0/4YmedTjM7x+0dMiI2Qif/yI+y8gmdbostOE8S2ZjrpKsgxVv2AAZPdzHEkzYSzx81RHDzZBhKRZc5mwWAmXsWBFRQol9PdSQ8BZYLqvJ4Jzrcrext+t1ZD7HE1RZPLPAqErO9eo+7Zn9Cvu5O73+b9dxhE2sRyAv9Tl1lV2WqMezWRsO55Q3LntawkPq0HvBkd9f8uVuq9zk7VKegetCDLb0wszBAs1mjWzN+ACVHiPVKIk94/QlCkj31dWCg8YTrT5btsKcLibxog7pv1+2e4yocZKWsposmcJbgG0";
    private $licenseFile;

    private function clearKey()
    {
        $this->licenseKey = null;
        $this->licenseFile = null;
    }

    /** Set the license key in Base64 format. */
    public function setKey($key)
    {
        $this->clearKey();
        $this->licenseKey = $key;
    }

    /** Set the path or URL to the license key file. */
    public function setFile($file)
    {
        $this->clearKey();
        $this->licenseFile = $file;
    }

    /** Get the HTML representation of the component. */
    public function getHtml()
    {
        $result = '';
        if (strlen($this->licenseKey) > 0)
            $result .= "Stimulsoft.Base.StiLicense.Key = '$this->licenseKey';\n";

        else if (strlen($this->licenseFile) > 0)
            $result .= "Stimulsoft.Base.StiLicense.loadFromFile('$this->licenseFile');\n";

        $this->isHtmlRendered = true;
        return $result;
    }

    /** Output of the HTML representation of the component. */
    public function renderHtml()
    {
        echo $this->getHtml();
    }
}