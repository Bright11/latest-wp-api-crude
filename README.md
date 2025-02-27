# WordPress API Plugin - WP API Bright

This WordPress plugin provides a CRUD REST API using Object-Oriented Programming (OOP). It allows you to create, read, update, and delete data through custom API endpoints.

## 🚀 Features
- Create a new record
- Retrieve all records
- Retrieve a single record by ID
- Update a record by ID
- Delete a record by ID

## 🛠️ Installation
1. **Download the plugin** or clone the repository.
2. **Upload the plugin folder** to `wp-content/plugins/` directory.
3. **Activate the plugin** from the WordPress admin panel (`Plugins` → `Installed Plugins`).
4. **Enable WordPress Debugging** (Optional):
   - Edit `wp-config.php` and set `WP_DEBUG` to `true`.

## 📡 API Endpoints

| Method | Endpoint | Description |
|--------|---------|-------------|
| **GET** | `/wp-json/wp-api-bright/v1/get` | Get all records |
| **GET** | `/wp-json/wp-api-bright/v1/get/{id}` | Get a single record by ID |
| **POST** | `/wp-json/wp-api-bright/v1/create` | Create a new record |
| **PUT** | `/wp-json/wp-api-bright/v1/update/{id}` | Update a record by ID |
| **DELETE** | `/wp-json/wp-api-bright/v1/delete/{id}` | Delete a record by ID |

---

## 🔗 Usage Examples

### **1️⃣ Get All Records**
**Request:**
```bash
GET /wp-json/wp-api-bright/v1/get-all
[
  {
    "id": 1,
    "title": "Sample Record",
    "content": "This is a test record"
  }
]

```
## Get single data
GET /wp-json/wp-api-bright/v1/get/1

## Create a post
POST /wp-json/wp-api-bright/v1/create

## Update post
PUT /wp-json/wp-api-bright/v1/update/1

## Delete post
DELETE /wp-json/wp-api-bright/v1/delete/1

Ensure Permalinks are set to Post name in WordPress settings (Settings → Permalinks).
Use an API testing tool like Postman or cURL to test the endpoints.
This plugin follows WordPress OOP best practices.


📜 License
This project is licensed under the MIT License.