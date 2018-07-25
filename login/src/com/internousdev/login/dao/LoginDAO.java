package com.internousdev.login.dao;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.internousdev.login.dto.LoginDTO;
import com.internousdev.login.util.DBConnector;

public class LoginDAO {
	public LoginDTO select(String name,String password) throws SQLException {
		LoginDTO dto=new LoginDTO();
		com.internousdev.login.util.DBConnector db = new DBConnector();
		Connection con = db.getConnection();
		String sql="select * from user where user_name=? and user_password=?";

		try {
			PreparedStatement ps = con.prepareStatement(sql);
			ps.setString(1, name);
			ps.setString(2, password);
			ResultSet rs=ps.executeQuery();

			if(rs.next()){
				dto.setName(rs.getString("user_name"));
				dto.setPassword(rs.getString("user_password"));

				System.out.println("DBの値" + dto.getName());
				System.out.println("DBの値" + dto.getPassword());

			}
		} catch (SQLException e){
			e.printStackTrace();
		} finally {
			con.close();
		}
		return dto;
	}
}
