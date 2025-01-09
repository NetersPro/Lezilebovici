using System;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using OpenQA.Selenium;
using OpenQA.Selenium.Firefox;
using OpenQA.Selenium.Support.UI;

namespace SeleniumTests
{
    [TestClass]
    public class Projekatlezilebovici
    {
        private static IWebDriver driver;
        private StringBuilder verificationErrors;
        private static string baseURL;
        private bool acceptNextAlert = true;
        
        [ClassInitialize]
        public static void InitializeClass(TestContext testContext)
        {
            driver = new FirefoxDriver();
            baseURL = "https://www.google.com/";
        }
        
        [ClassCleanup]
        public static void CleanupClass()
        {
            try
            {
                //driver.Quit();// quit does not close the window
                driver.Close();
                driver.Dispose();
            }
            catch (Exception)
            {
                // Ignore errors if unable to close the browser
            }
        }
        
        [TestInitialize]
        public void InitializeTest()
        {
            verificationErrors = new StringBuilder();
        }
        
        [TestCleanup]
        public void CleanupTest()
        {
            Assert.AreEqual("", verificationErrors.ToString());
        }
        
        [TestMethod]
        public void TheProjekatlezileboviciTest()
        {
            driver.Navigate().GoToUrl("http://localhost/projekatlezilebovici/");
            driver.FindElement(By.CssSelector("li:nth-child(1) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(2) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(3) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(4) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(5) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(6) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(7) > a")).Click();
            driver.FindElement(By.Id("login-email")).Click();
            driver.FindElement(By.CssSelector(".container")).Click();
            // ERROR: Caught exception [Error: unknown strategy [linktext] for locator [linkText=Registrujte se]]
            driver.FindElement(By.Id("register-name")).Click();
            driver.FindElement(By.Id("register-name")).Clear();
            driver.FindElement(By.Id("register-name")).SendKeys("Test");
            driver.FindElement(By.Id("register-email")).Click();
            driver.FindElement(By.Id("register-email")).Clear();
            driver.FindElement(By.Id("register-email")).SendKeys("testiranje@gmail.com");
            driver.FindElement(By.Id("register-password")).Click();
            driver.FindElement(By.Id("register-password")).Clear();
            driver.FindElement(By.Id("register-password")).SendKeys("Test");
            driver.FindElement(By.Name("register")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(7) > a")).Click();
            driver.FindElement(By.Id("login-email")).Click();
            driver.FindElement(By.Id("login-email")).Clear();
            driver.FindElement(By.Id("login-email")).SendKeys("Test");
            driver.FindElement(By.Id("login-password")).Click();
            driver.FindElement(By.Id("login-password")).Clear();
            driver.FindElement(By.Id("login-password")).SendKeys("testiranje");
            // ERROR: Caught exception [ERROR: Unsupported command [mouseDownAt | id=login-email | -2.04998779296875,19.83331298828125]]
            // ERROR: Caught exception [ERROR: Unsupported command [mouseMoveAt | id=login-email | -2.04998779296875,19.83331298828125]]
            // ERROR: Caught exception [ERROR: Unsupported command [mouseUpAt | id=login-email | -2.04998779296875,19.83331298828125]]
            driver.FindElement(By.Id("login-email")).Click();
            driver.FindElement(By.Id("login-email")).Clear();
            driver.FindElement(By.Id("login-email")).SendKeys("testiranje@gmail.com");
            driver.FindElement(By.Id("login-password")).Click();
            driver.FindElement(By.Id("login-password")).Clear();
            driver.FindElement(By.Id("login-password")).SendKeys("Test");
            driver.FindElement(By.Id("show-password")).Click();
            driver.FindElement(By.Id("show-password")).Click();
            driver.FindElement(By.Name("login")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(2) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(3) > a")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(6) > a")).Click();
            driver.FindElement(By.Id("ime")).Click();
            driver.FindElement(By.Id("ime")).Clear();
            driver.FindElement(By.Id("ime")).SendKeys("Test");
            driver.FindElement(By.Id("email")).Clear();
            driver.FindElement(By.Id("email")).SendKeys("testiranje@gmail.com");
            driver.FindElement(By.Id("poruka")).Clear();
            driver.FindElement(By.Id("poruka")).SendKeys("Test poruke za probu...");
            driver.FindElement(By.CssSelector(".button")).Click();
            driver.FindElement(By.CssSelector("li:nth-child(8) > a")).Click();
            driver.FindElement(By.Id("admin_ime")).Click();
            driver.FindElement(By.Id("admin_lozinka")).Clear();
            driver.FindElement(By.Id("admin_lozinka")).SendKeys("BurekSvisnjom33!");
            driver.FindElement(By.Id("admin_ime")).Clear();
            driver.FindElement(By.Id("admin_ime")).SendKeys("Proko");
            driver.FindElement(By.CssSelector("button")).Click();
            acceptNextAlert = true;
            driver.FindElement(By.CssSelector("tr:nth-child(4) button")).Click();
            Assert.IsTrue(Regex.IsMatch(CloseAlertAndGetItsText(), "^Da li ste sigurni da želite da obrišete ovu poruku[\\s\\S]$"));
            // ERROR: Caught exception [unknown command [webdriverChooseOkOnVisibleConfirmation]]
            // ERROR: Caught exception [Error: unknown strategy [linktext] for locator [linkText=Odjava]]
        }
        private bool IsElementPresent(By by)
        {
            try
            {
                driver.FindElement(by);
                return true;
            }
            catch (NoSuchElementException)
            {
                return false;
            }
        }
        
        private bool IsAlertPresent()
        {
            try
            {
                driver.SwitchTo().Alert();
                return true;
            }
            catch (NoAlertPresentException)
            {
                return false;
            }
        }
        
        private string CloseAlertAndGetItsText() {
            try {
                IAlert alert = driver.SwitchTo().Alert();
                string alertText = alert.Text;
                if (acceptNextAlert) {
                    alert.Accept();
                } else {
                    alert.Dismiss();
                }
                return alertText;
            } finally {
                acceptNextAlert = true;
            }
        }
    }
}
