using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Portfolio.Models.LRModels
{
    public class LRLogin
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string FullName { get; set; }
        public string Email { get; set; }
        public string DOB { get; set; }
        public string City { get; set; }
        public string Country { get; set; }
        public string Provider { get; set; }

        public LRLogin()
        {

        }

        public LRLogin(string firstName, string lastName, string fullName, string email,
            string dob, string city, string country, string provider)
        {
            FirstName = firstName;
            LastName = lastName;
            FullName = fullName;
            Email = email;
            DOB = dob;
            City = city;
            Country = country;
            Provider = provider;
        }
    }
}