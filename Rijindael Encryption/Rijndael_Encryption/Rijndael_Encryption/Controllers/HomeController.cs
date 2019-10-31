using System;
using System.Web;
using System.Web.Mvc;
using System.IO;
using System.Security.Cryptography;
using System.Text;

namespace Rijndael_Encryption.Controllers
{

    public class HomeController : Controller
    {

        #region final


     //   private string password = @"0123456789123456"; //32byte [256 Bit Encryption] 1chr = 2byte(unicode)
        private string InitVector = @"qwertyui";       //16byte
        private string baseUrl = "D://";

        public JsonResult EncryptFile(string password)
        {
            ReturnData result = new ReturnData();

            result.success = false;
            try
            {
                if (Request.Files.Count > 0)
                {
                    HttpPostedFileBase file = Request.Files[0];

                    string filename = Path.GetFileName(file.FileName);
                    string outputFile = Path.Combine(baseUrl, "encry_" + filename);


                    UnicodeEncoding UE = new UnicodeEncoding();
                    byte[] key = UE.GetBytes(password);
                    byte[] IV = UE.GetBytes(InitVector);
                    //byte[] IV2 = ASCIIEncoding.UTF8.GetBytes(initVector);
                    FileStream fsCrypt = new FileStream(outputFile, FileMode.Create);
                    RijndaelManaged RMCrypto = new RijndaelManaged();
                    ICryptoTransform encryptor = RMCrypto.CreateEncryptor(key, IV);
                    CryptoStream cs = new CryptoStream(fsCrypt, encryptor, CryptoStreamMode.Write);

                    int data;
                    while ((data = file.InputStream.ReadByte()) != -1)
                    {
                        cs.WriteByte((byte)data);

                    }

                    file.InputStream.Close();
                    cs.Close();
                    fsCrypt.Close();

                    result.success = true;
                    result.url = "encry_" + filename;
                    result.name = "encry_" + filename;
                }

            }
            catch (Exception e)
            {

                result.success = false;
                result.url = string.Empty;
                result.name = string.Empty;
                result.error = e.Message;
            }

            return Json(result, JsonRequestBehavior.AllowGet);

        }



        public JsonResult DecryptFile(string password)
        {
            ReturnData result = new ReturnData();
            try
            {

                if (Request.Files.Count > 0)
                {

                    HttpPostedFileBase file = Request.Files[0];

                    string filename = Path.GetFileName(file.FileName);
                    string outputFile = Path.Combine(baseUrl, "decry_" + filename);


                    UnicodeEncoding UE = new UnicodeEncoding();
                    byte[] key = UE.GetBytes(password);
                    byte[] IV = UE.GetBytes(InitVector);

                    RijndaelManaged RMCrypto = new RijndaelManaged();
                    ICryptoTransform decryptor = RMCrypto.CreateDecryptor(key, IV);
                    CryptoStream cs = new CryptoStream(file.InputStream, decryptor, CryptoStreamMode.Read);
                    FileStream fsOut = new FileStream(outputFile, FileMode.Create);

                    int data;
                    while ((data = cs.ReadByte()) != -1)
                    {
                        fsOut.WriteByte((byte)data);
                    }

                    file.InputStream.Close();
                    fsOut.Close();
                    cs.Close();

                    result.name = "decry_" + filename;
                    result.url = "decry_" + filename;
                    result.success = true;
                }
            }
            catch (Exception e)
            {

            }
            return new JsonResult { Data = result };
        }


        #endregion final




        public ActionResult encrypt()
        {
            ViewBag.Message = "Your encrypt page.";

            return View();
        }


        public ActionResult decrypt()
        {
            ViewBag.Message = "decrypt page.";

            return View();
        }


    }



    public class ReturnData
    {
        public bool success { get; set; }
        public string url { get; set; }
        public string name { get; set; }
        public string error { get; set; }
    }
}



