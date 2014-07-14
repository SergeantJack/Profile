using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using LoginRadius;
using LoginRadius.SDK.API;
using LoginRadius.SDK.Models;
using LoginRadius.SDK;
using Portfolio.Models.LRModels;
using LoginRadius.SDK.Models.UserProfile;
using System.Xml.Serialization;
using System.IO;

namespace Portfolio.Controllers
{
    public class LRController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult FB()
        {
            return View();
        }

        public ActionResult LR()
        {
            return View();
        }

        public ActionResult Callback()
        {
            LoginRadiusCallback callback = new LoginRadiusCallback();
            LoginRadiusAccessToken accessToken = new LoginRadiusAccessToken();

            if (callback.IsCallback)
            {
                accessToken = callback.GetAccessToken("c3abe56d-471a-4b6f-9f79-c0901fcfbc23");
                Session["LRAT"] = accessToken;
            }

            LoginRadiusClient client = new LoginRadiusClient(accessToken);
            UserProfileAPI userProfile = new UserProfileAPI();
            LoginRadiusUltimateUserProfile model = client.GetResponse<LoginRadiusUltimateUserProfile>(userProfile);
            LRLogin obj = new LRLogin(model.FirstName, model.LastName,
                model.FullName, model.Email.First().Value, model.BirthDate,
                model.LocalCity, model.LocalCountry, model.Provider);

            return View(obj);
        }

        [HttpPost]
        public ActionResult Register(LRLogin model)
        {
            XmlSerializer s = new XmlSerializer(typeof(LRLogin));

            s.Serialize(new FileStream(Server.MapPath(String.Format("~/App_Data/Users/{0}.xml", Server.UrlEncode(model.FirstName))), FileMode.Create), model);
            
            return View(model);
        }
    }
}