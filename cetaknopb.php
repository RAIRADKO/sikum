<?php
    include "koneksi.php";

  $id = $_GET['id'];
  $show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
  
  if(mysqli_num_rows($show) == 0)
  { 
    echo "<script>window.history.back()</script>";
  }
  else
  {
    $data = mysqli_fetch_assoc($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  }
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="cetaknosk_files/filelist.xml">
<link rel=Edit-Time-Data href="cetaknosk_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>IKA HUKUM</o:Author>
  <o:LastAuthor>IKA HUKUM</o:LastAuthor>
  <o:Revision>15</o:Revision>
  <o:TotalTime>239</o:TotalTime>
  <o:Created>2021-04-05T16:38:00Z</o:Created>
  <o:LastSaved>2021-04-21T04:17:00Z</o:LastSaved>
  <o:Pages>2</o:Pages>
  <o:Words>80</o:Words>
  <o:Characters>457</o:Characters>
  <o:Lines>3</o:Lines>
  <o:Paragraphs>1</o:Paragraphs>
  <o:CharactersWithSpaces>536</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="cetaknosk_files/themedata.thmx">
<link rel=colorSchemeMapping href="cetaknosk_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Print</w:View>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>5,5 pt</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-ID</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:UseWord2010TableStyleRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="375">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:"Bookman Old Style";
	panose-1:2 5 6 4 5 5 5 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:105%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
p.msonormal0, li.msonormal0, div.msonormal0
	{mso-style-name:msonormal;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
@page WordSection1
	{size:31.0cm 21.0cm;
	mso-page-orientation:landscape;
	margin:2.0cm 1.0cm 2.0cm 2.0cm;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:39;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-fareast-language:EN-US;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-ID style='tab-interval:36.0pt'>

<div class=WordSection1>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=463 colspan=3 valign=top style='width:347.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:14.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>KARTU NOMOR<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:14.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>PERATURAN BUPATI PURWOREJO</span></b><span
  lang=EN-US style='font-size:14.0pt;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:14.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=438 colspan=5 valign=top style='width:328.5pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:14.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>KARTU NOMOR<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:14.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>PERATURAN BUPATI PURWOREJO</span></b><span
  lang=EN-US style='font-size:14.0pt;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>NOMOR PERBUP<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><?php echo $data['nopb']?> TAHUN <?php echo date ('Y', strtotime($data['tglpb']))?><o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>NOMOR PERBUP<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><?php echo $data['nopb']?> TAHUN <?php echo date ('Y', strtotime($data['tglpb']))?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>TANGGAL PERBUP<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'><span
  lang=EN-US style='font-size:12.0pt;line-height:105%;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><?php echo date ('d-m-Y', strtotime($data['tglpb']))?></span></td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>TANGGAL PERBUP<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'><span
  lang=EN-US style='font-size:12.0pt;line-height:105%;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><?php echo date ('d-m-Y', strtotime($data['tglpb']))?></span></td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>JUDUL PERBUP<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=274 valign=top style='width:210.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='text-align:justify'><span lang=EN-US
  style='font-size:12.0pt;line-height:105%;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><?php echo $data['judulpb'] ?><o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>JUDUL PERBUP<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='text-align:justify'><span lang=EN-US
  style='font-size:12.0pt;line-height:105%;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><?php echo $data['judulpb'] ?></span><span
  lang=EN-US style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>DINAS/OPD<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'><span
  lang=EN-US style='font-size:12.0pt;line-height:105%;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><?php echo $data['kodeopd']?></span></td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>DINAS/OPD<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'><span
  lang=EN-US style='font-size:12.0pt;line-height:105%;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><?php echo $data['kodeopd']?></span></td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>TGL PENGUNDANGAN<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'><span
  lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><?php echo date ('d-m-Y', strtotime($data['tglpengundangan']))?></span>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>TGL PENGUNDANGAN<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>:<o:p></o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'><span
  lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><?php echo date ('d-m-Y', strtotime($data['tglpengundangan']))?></span>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=463 colspan=3 valign=top style='width:347.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>BERITA DAERAH TAHUN <?php echo date ('Y', strtotime($data['tglpb']))?> NO <?php echo $data['nopb']?> SERI <?php echo $data['seri']?> NO <?php echo $data['noseri']?></span><span lang=EN-US
  style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=438 colspan=5 valign=top style='width:328.5pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>BERITA DAERAH TAHUN <?php echo date ('Y', strtotime($data['tglpb']))?> NO <?php echo $data['nopb']?> SERI <?php echo $data['seri']?> NO <?php echo $data['noseri']?></span><span lang=EN-US
  style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>TANDA TERIMA
  AMBIL<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'>TANGGAL<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-US style='mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=119 valign=top style='width:89.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>(<o:p></o:p></span></p>
  </td>
  <td width=119 valign=top style='width:89.1pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 valign=top style='width:18.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-US style='mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
  EN-US'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'></td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><?php echo $data['kodepb']?>/<?php echo date ('d-m-Y', strtotime($data['tglturunpb']))?></span><span
  lang=EN-US style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;mso-yfti-lastrow:yes'>
  <td width=171 valign=top style='width:128.05pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=274 valign=top style='width:205.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:"Bookman Old Style",serif;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
  EN-US'>Lembar</span></span><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'> <span
  class=SpellE>untuk</span> OPD <span class=SpellE>Pemrakarsa</span></span><span
  lang=EN-US style='mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=157 valign=top style='width:117.7pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:"Bookman Old Style",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 colspan=3 valign=top style='width:196.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:"Bookman Old Style",serif;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
  EN-US'>Lembar</span></span><span lang=EN-US style='font-size:12.0pt;
  font-family:"Bookman Old Style",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'> <span
  class=SpellE>untuk</span> <span class=SpellE>Bagian</span> <span
  class=SpellE>Hukum</span><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='mso-ansi-language:EN-US'><script>
		window.print();
</script></span><span style='font-size:12.0pt;font-family:"Times New Roman",serif;
mso-fareast-language:EN-ID'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
